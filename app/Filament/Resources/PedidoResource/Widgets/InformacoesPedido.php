<?php

namespace App\Filament\Resources\PedidoResource\Widgets;

use App\Models\Pedido;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class InformacoesPedido extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Novos Pedidos', Pedido::query()->where('status', 'pendente')->count()),
            Stat::make('Pedidos Processando', Pedido::query()->where ('status', 'processando')->count()),
            Stat::make('Pedidos Enviados', Pedido::query()->where ('status', 'enviado')->count()),

        ];
    }
}
