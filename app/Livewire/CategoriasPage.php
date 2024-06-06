<?php

namespace App\Livewire;

use App\Models\Categoria;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title("Categorias - Charme Jóias")]
class CategoriasPage extends Component
{
    public function render()
    {
        $categorias = Categoria::where('status',1)->get();
        return view('livewire.categorias-page',[
            'categorias' => $categorias,
        ]);
    }
}
