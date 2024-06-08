<?php

namespace App\Livewire;

use App\Helpers\GestaoCarrinho;
use App\Livewire\Partials\Navbar;
use App\Models\Produto;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title("Detalhes do Produto - Charme Jóais")]
class DetalhesProdutoPage extends Component
{

    use LivewireAlert;
    public $rotulo;
    public $quantidade = 1;

    public function mount($rotulo){
        return $this->rotulo = $rotulo;
    }

    public function addQuantidade(){
        $this->quantidade++;
    }

    public function removeQuantidade(){
        if($this->quantidade > 1){
            $this->quantidade--;
        }
    }

    public function adicionarCarrinho($produto_id){
        $contar_total = GestaoCarrinho::adicionarItemCarrinhoComQuantidade($produto_id, $this->quantidade);
        $this->dispatch('update-carrinho-numero', contar_total: $contar_total)->to(Navbar::class);

        $this->alert('success', 'Produto adicionado com sucesso!', [
            'position' => 'bottom',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => true,
           ]);
    }

    public function render()
    {
        return view('livewire.detalhes-produto-page', [
            'produto' => Produto::where('rotulo', $this->rotulo)->firstOrFail(),
        ]);
    }
}
