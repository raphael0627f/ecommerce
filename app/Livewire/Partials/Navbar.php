<?php

namespace App\Livewire\Partials;

use App\Helpers\GestaoCarrinho;
use Livewire\Attributes\On;
use Livewire\Component;

class Navbar extends Component
{
    public $contar_total = 0;

    public function mount(){
        $this->contar_total = count(GestaoCarrinho::obterTodosItensCarrinho());
    }

    #[On('update-carrinho-numero')]
    public function updateCarrinhoNumero($contar_total){
        $this->contar_total = $contar_total;
    }

    public function render()
    {
        return view('livewire.partials.navbar');
    }
}
