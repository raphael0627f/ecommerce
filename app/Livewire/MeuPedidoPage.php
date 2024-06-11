<?php

namespace App\Livewire;

use App\Models\Pedido;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Meus pedidos - Charme Joias')]
class MeuPedidoPage extends Component
{
    use WithPagination;

    public function render()
    {
        $meus_pedidos = Pedido::where('usuario_id', auth()->user()->id)->latest()->paginate(5);
        return view('livewire.meu-pedido-page',[
            'pedidos'=> $meus_pedidos,
        ]);
    }
}
