<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title("Detalhes do Produto - Charme Jóais")]
class DetalhesProdutoPage extends Component
{
public $rotulo;

public function mount($rotulo){
    return $this->rotulo = $rotulo;
}

    public function render()
    {
        return view('livewire.detalhes-produto-page', [
            'produto' => Produto::where('rotulo', $this->rotulo)->firstOrFail(),
        ]);
    }
}
