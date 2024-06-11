<?php

namespace App\Livewire;

use App\Helpers\GestaoCarrinho;
use App\Livewire\Partials\Navbar;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Carrinho - Charme Jóias')]
class CarrinhoPage extends Component
{
    public $carrinho_itens = [];
    public $valor_total;

    public function removerItem($produto_id){
        $this->carrinho_itens = GestaoCarrinho::removerItemCarrinho($produto_id);
        $this->valor_total = GestaoCarrinho::calcularValorTotalCarrinho($this->carrinho_itens);
        $this->dispatch('update-carrinho-numero', contar_total: count($this->carrinho_itens))->to(Navbar::class);

    }

    public function addQuantidade($produto_id){
        $this->carrinho_itens = GestaoCarrinho::adicionarQuantidadeItemCarrinho($produto_id);
        $this->valor_total = GestaoCarrinho::calcularValorTotalCarrinho($this->carrinho_itens);
    }

    public function removerQuantidade($produto_id){
        $this->carrinho_itens = GestaoCarrinho::removerQuantidadeItemCarrinho($produto_id);
        $this->valor_total = GestaoCarrinho::calcularValorTotalCarrinho($this->carrinho_itens);
    }

    public function mount()
    {
        $this->carrinho_itens = GestaoCarrinho::obterTodosItensCarrinho();
        $this->valor_total = GestaoCarrinho::calcularValorTotalCarrinho($this->carrinho_itens);
    }

    public function render()
    {
        return view('livewire.carrinho-page');
    }
}
