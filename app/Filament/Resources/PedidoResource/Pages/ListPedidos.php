<?php

namespace App\Filament\Resources\PedidoResource\Pages;

use App\Filament\Resources\PedidoResource;
use App\Filament\Resources\PedidoResource\Widgets\InformacoesPedido;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;

class ListPedidos extends ListRecords
{
    protected static string $resource = PedidoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            InformacoesPedido::class,
        ];
    }

    public function getTabs(): array
    {
        return [
            null => Tab::make('Tudo'),
            'novo' => Tab::make()->query(fn ($query) => $query->where('status', 'pendente')),
            'Processando' => Tab::make()->query(fn ($query) => $query->where('status', 'processando')),
            'enviado' => Tab::make()->query(fn ($query) => $query->where('status', 'enviado')),
            'entregue' => Tab::make()->query(fn ($query) => $query->where('status', 'entregue')),
            'cancelado' => Tab::make()->query(fn ($query) => $query->where('status', 'cancelado')),
        ];
    }
}
