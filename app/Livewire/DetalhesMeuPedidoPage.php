<?php

namespace App\Livewire;

use App\Models\Endereco;
use App\Models\Pedido;
use App\Models\PedidoItem;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Detalhes do Pedido - Charme Jóias')]
class DetalhesMeuPedidoPage extends Component
{
    public $pedido_id;

    public function mount($pedido_id)
    {
        $this->pedido_id = $pedido_id;
    }

    public function render()
    {
        $pedido_itens = PedidoItem::with('produto')->where('pedido_id', $this->pedido_id)->get();
        $endereco = Endereco::where('pedido_id', $this->pedido_id)->first();
        $pedido = Pedido::where('id', $this->pedido_id)->first();

        if($pedido->usuario_id != auth()->user()->id){
            redirect()->route('meus-pedidos');
        }

        return view('livewire.detalhes-meu-pedido-page',[
            'pedido_itens' => $pedido_itens,
            'endereco' => $endereco,
            'pedido' => $pedido
        ]);
    }
}
