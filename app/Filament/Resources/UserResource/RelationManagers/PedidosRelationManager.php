<?php

namespace App\Filament\Resources\UserResource\RelationManagers;

use App\Filament\Resources\PedidoResource;
use App\Models\Pedido;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PedidosRelationManager extends RelationManager
{
    protected static string $relationship = 'pedidos';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('id')
            ->columns([
                TextColumn::make('id')
                    ->label('Código pedido')
                    ->searchable(),

                TextColumn::make('valor_total')
                    ->label('Valor total')
                    ->money('BRL'),

                TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'pendente' => 'info',
                        'processando' => 'warning',
                        'enviado' => 'success',
                        'entregue' => 'success',
                        'cancelado' => 'danger',
                    })
                    ->icon(fn (string $state): string => match ($state) {
                        'pendente' => 'heroicon-m-clock',
                        'processando' => 'heroicon-m-arrow-path',
                        'enviado' => 'heroicon-m-truck',
                        'entregue' => 'heroicon-m-check-badge',
                        'cancelado' => 'heroicon-m-x-circle',
                    })
                    ->sortable(),

                TextColumn::make('metodo_pagamento')
                    ->label('Forma de pagamento')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('status_pagamento')
                    ->label('Status do pagamento')
                    ->searchable()
                    ->badge()
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Criado em')
                    ->dateTime()
            ])
            ->filters([
                //
            ])
            ->headerActions([
                //Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Action::make('Ver Pedido')
                    ->url(fn (Pedido $record) : string => PedidoResource::getUrl('view', ['record' => $record]))
                    ->color('info')
                    ->icon('heroicon-o-eye'),
                //Tables\Actions\EditAction::make(),
                //Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
