<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\PedidoResource;
use App\Models\Pedido;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class UltimosPedidos extends BaseWidget
{
    protected int|string|array $columnSpan = 'full';
    protected static ?int $sort = 2;

    public function table(Table $table): Table
    {
        return $table
            ->query(PedidoResource::getEloquentQuery())
            ->defaultPaginationPageOption(5)
            ->defaultSort('created_at', 'desc')
            ->columns([
                TextColumn::make('id')
                    ->label('Cód. pedido')
                    ->searchable(),

                TextColumn::make('user.name')
                    ->label('Cliente')
                    ->searchable(),


                TextColumn::make('valor_total')
                    ->label('Valor total')
                    ->money('BRL'),

                TextColumn::make('status')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'pendente' => 'info',
                        'processando' => 'warning',
                        'enviado' => 'success',
                        'entregue' => 'success',
                        'cancelado' => 'danger',
                    })
                    ->icon(fn(string $state): string => match ($state) {
                        'pendente' => 'heroicon-m-clock',
                        'processando' => 'heroicon-m-arrow-path',
                        'enviado' => 'heroicon-m-truck',
                        'entregue' => 'heroicon-m-check-badge',
                        'cancelado' => 'heroicon-m-x-circle',
                    })
                    ->sortable(),

                TextColumn::make('metodo_pagamento')
                    ->label('Forma pagamento')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('status_pagamento')
                    ->label('Status pagamento')
                    ->searchable()
                    ->badge()
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Criado em')
                    ->dateTime()
            ])
            ->actions([
                Action::make('Ver Pedido')
                    ->url(fn(Pedido $record): string => PedidoResource::getUrl('view', ['record' => $record]))
                    ->icon('heroicon-m-eye'),
            ]);
    }
}
