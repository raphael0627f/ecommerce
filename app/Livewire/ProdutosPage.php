<?php

namespace App\Livewire;

use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Produto;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;
#[Title("Produtos - Charme Jóais")]
class ProdutosPage extends Component
{
    use WithPagination;

    #[Url]
    public $selected_categorias =[];

    #[Url]
    public $selected_marcas =[];

   #[Url]
    public $estoque;

    #[Url]
    public $em_promocao;

    // #[Url]
    // public $preco_range = 30000;

    public function render()
    {
        $produtoQuery = Produto::query()->where('status', 1);

        if(!empty($this->selected_categorias)){
            $produtoQuery = Produto::query()->whereIn('categoria_id', $this->selected_categorias);
        }

        if(!empty($this->selected_marcas)){
            $produtoQuery = Produto::query()->whereIn('marca_id', $this->selected_marcas);
        }

        if($this->estoque){
            $produtoQuery->where('estoque', 1);
        }

        if($this->em_promocao){
            $produtoQuery->where('promocao', 1);
        }

        return view('livewire.produtos-page',[
            'produtos' => $produtoQuery->paginate(9),
            'marcas' => Marca::where('status',1)->get(['id','nome','rotulo']),
            'categorias' => Categoria::where('status',1)->get(['id','nome','rotulo']),
        ]);
    }
}
