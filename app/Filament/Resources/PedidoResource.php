<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PedidoResource\Pages;
use App\Filament\Resources\PedidoResource\RelationManagers;
use App\Filament\Resources\PedidoResource\RelationManagers\EnderecoRelationManager;
use App\Models\Pedido;
use App\Models\Produto;
use Filament\Actions\ActionGroup;
use Filament\Forms;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ActionGroup as ActionsActionGroup;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Number;

class PedidoResource extends Resource
{
    protected static ?string $model = Pedido::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';
    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make('Informação do pedido')->schema([
                        Select::make('usuario_id')
                            ->label('Cliente')
                            ->relationship('user', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),

                        Select::make('metodo_pagamento')
                            ->label('Metodo de pagamento')
                            ->options([
                                'cartao de credito' => 'Cartão de Credito',
                                'cartao de debito' => 'Cartão de Debito',
                                'boleto' => 'Boleto',
                                'pix' => 'Pix',
                            ])
                            ->required(),

                        Select::make('status_pagamento')
                            ->label('Status do pagamento')
                            ->options([
                                'pendente' => 'Pendente',
                                'aprovado' => 'Aprovado',
                                'falhou' => 'Falhou',
                            ])
                            ->default('pendente')
                            ->required(),

                        ToggleButtons::make('status')
                            ->label('Status do pedido')
                            ->inline()
                            ->options([
                                'pendente' => 'Pendente',
                                'processando' => 'Processando',
                                'enviado' => 'Enviado',
                                'entregue' => 'Entregue',
                                'cancelado' => 'Cancelado',
                            ])
                            ->default('pendente')
                            ->colors([
                                'pendente' => 'info',
                                'processando' => 'warning',
                                'enviado' => 'success',
                                'entregue' => 'success',
                                'cancelado' => 'danger',
                            ])
                            ->icons([
                                'pendente' => 'heroicon-m-clock',
                                'processando' => 'heroicon-m-arrow-path',
                                'enviado' => 'heroicon-m-truck',
                                'entregue' => 'heroicon-m-check-badge',
                                'cancelado' => 'heroicon-m-x-circle',
                            ])
                            ->required(),

                        Select::make('metodo_envio')
                            ->label('Metodo de envio')
                            ->options([
                                'correios' => 'Correios',
                                'sedex' => 'Sedex',
                                'pac' => 'PAC',
                                'trasportadora' => 'Transportadora',
                            ]),
                        //->required(),

                        Textarea::make('observacao')
                            ->label('Observação'),

                        Section::make('Produtos do pedido')->schema([
                            Repeater::make('itens')
                                ->relationship()
                                ->schema([
                                    Select::make('produto_id')
                                        ->label('Produto')
                                        ->relationship('produto', 'nome')
                                        ->searchable()
                                        ->preload()
                                        ->required()
                                        ->distinct()
                                        ->disableOptionsWhenSelectedInSiblingRepeaterItems()
                                        ->reactive()
                                        ->afterStateUpdated(fn($state, Set $set) => $set('preco_unitario', Produto::find($state)->preco ?? 0))
                                        ->afterStateUpdated(fn($state, Set $set) => $set('preco_total', Produto::find($state)->preco ?? 0))
                                        ->columnSpan(4),

                                    TextInput::make('quantidade')
                                        ->label('Quantidade')
                                        ->numeric()
                                        ->default(1)
                                        ->minValue(1)
                                        ->required()
                                        ->reactive()
                                        ->afterStateUpdated(fn($state, Set $set, Get $get) => $set('preco_total', $get('preco_unitario') * $state))
                                        ->columnSpan(2),

                                    TextInput::make('preco_unitario')
                                        ->label('Preço unitário')
                                        ->numeric()
                                        ->disabled()
                                        ->required()
                                        ->dehydrated()
                                        ->columnSpan(3),

                                    TextInput::make('preco_total')
                                        ->label('Preço total')
                                        ->numeric()
                                        ->disabled()
                                        ->required()
                                        ->dehydrated()
                                        ->columnSpan(3),

                                ])->columns(12),

                            Placeholder::make('valor_total_placeholder')
                                ->label('Valor total')
                                ->content(function (Get $get, Set $set) {
                                    $total = 0;
                                    if (!$repeaters = $get('itens')) {
                                        return $total;
                                    }
                                    foreach ($repeaters as $key => $repeater) {
                                        $total += $get("itens.{$key}.preco_total");
                                    }
                                    $set('valor_total', $total);
                                    return Number::currency($total, 'BRL');
                                }),
                            Hidden::make('valor_total')
                                ->default(0),
                        ])
                    ])->columns(2),
                ])->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Cliente')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('valor_total')
                    ->numeric()
                    ->searchable()
                    ->money('BRL')
                    ->sortable(),

                Tables\Columns\TextColumn::make('metodo_pagamento')
                    ->label('Forma de pagamento')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('status_pagamento')
                    ->label('Status do pagamento')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('metodo_envio')
                    ->label('Metodo de envio')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\SelectColumn::make('status')
                    ->options([
                        'pendente' => 'Pendente',
                        'processando' => 'Processando',
                        'enviado' => 'Enviado',
                        'entregue' => 'Entregue',
                        'cancelado' => 'Cancelado',
                    ])
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Criado em')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Atualizado em')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
               ActionsActionGroup::make([
                   Tables\Actions\ViewAction::make(),
                   Tables\Actions\EditAction::make(),
               ])
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            EnderecoRelationManager::class,
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getNavigationBadgeColor(): string|array|null
    {
        return static::getModel()::count() > 10 ? 'success' : 'danger';
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPedidos::route('/'),
            'create' => Pages\CreatePedido::route('/create'),
            'view' => Pages\ViewPedido::route('/{record}'),
            'edit' => Pages\EditPedido::route('/{record}/edit'),
        ];
    }
}
