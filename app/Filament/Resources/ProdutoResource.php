<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProdutoResource\Pages;
use App\Filament\Resources\ProdutoResource\RelationManagers;
use App\Models\Produto;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Filament\Forms\Set;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use function Laravel\Prompts\select;

class ProdutoResource extends Resource
{
    protected static ?string $model = Produto::class;

    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make('Informações do Produto')->schema([
                        TextInput::make('nome')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (string $operation, $state, Set $set) {
                                if ($operation !== 'create') {
                                    return;
                                }
                                $set('rotulo', Str::slug($state));
                            }),

                        TextInput::make('rotulo')
                            ->label('Rótulo')
                            ->required()
                            ->maxLength(255)
                            ->disabled()
                            ->dehydrated()
                            ->unique(Produto::class, 'rotulo', ignoreRecord: true),

                        MarkdownEditor::make('descricao')
                            ->columnSpanFull()
                            ->fileAttachmentsDirectory('produto')
                    ])->columns(2),

                    Section::make('Imagens')->schema([
                        FileUpload::make('imagens')
                            ->multiple()
                            ->directory('produtos')
                            ->maxFiles(5)
                            ->reorderable()
                    ])
                ])->columnSpan(2),

                Group::make()->schema([
                    Section::make('Preco')->schema([
                        TextInput::make('preco')
                            ->numeric()
                            ->required()
                            ->prefix('R$')
                    ]),

                    Section::make('Atributos')->schema([
                        Select::make('categoria_id')
                            ->required()
                            ->searchable()
                            ->preload()
                            ->relationship('categoria', 'nome'),

                        Select::make('marca_id')
                            ->required()
                            ->searchable()
                            ->preload()
                            ->relationship('marca', 'nome')
                    ]),

                    Section::make('Status')->schema([
                        Toggle::make('estoque')
                            ->label('Em Estoque')
                            ->required()
                            ->default(true),

                        Toggle::make('status')
                            ->label('Ativo')
                            ->required()
                            ->default(true),

                        Toggle::make('destaque')
                            ->label('Em Destaque')
                            ->required(),

                        Toggle::make('venda')
                            ->label('Em Promoção')
                            ->required()
                    ])
                ])->columnSpan(1)

            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nome')
                    ->searchable(),

                TextColumn::make('categoria.nome')
                    ->sortable(),

                TextColumn::make('marca.nome')
                    ->sortable(),

                TextColumn::make('preco')
                    ->money('BRL')
                    ->sortable(),

                IconColumn::make('destaque')
                    ->label('Em Destaque')
                    ->boolean(),

                IconColumn::make('venda')
                    ->label('Em Promoção')
                    ->boolean(),

                IconColumn::make('estoque')
                    ->label('Em Estoque')
                    ->boolean(),

                IconColumn::make('status')
                    ->label('Ativo')
                    ->boolean(),

                TextColumn::make('created_at')
                    ->label('Criado em')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->label('Atualizado em')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('categoria')
                    ->relationship('categoria', 'nome'),

                SelectFilter::make('marca')
                    ->relationship('marca', 'nome')
            ])
            ->actions([
                ActionGroup::make([
                    EditAction::make(),
                    ViewAction::make(),
                    DeleteAction::make(),
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProdutos::route('/'),
            'create' => Pages\CreateProduto::route('/create'),
            'edit' => Pages\EditProduto::route('/{record}/edit'),
        ];
    }
}
