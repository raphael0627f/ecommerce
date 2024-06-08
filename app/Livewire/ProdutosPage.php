<?php

namespace App\Livewire;

use App\Helpers\GestaoCarrinho;
use App\Livewire\Partials\Navbar;
use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Produto;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;
#[Title("Produtos - Charme Jóais")]
class ProdutosPage extends Component
{
    use WithPagination;
    use LivewireAlert;

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

    #[Url]
    public $ordem = 'recente';

    //funcao adicionar produto ao carrinho
    public function adicionarCarrinho($produto_id){
        $contar_total = GestaoCarrinho::adicionarItemCarrinho($produto_id);
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

        if($this->ordem == 'recente'){
            $produtoQuery->latest();
        }

        if($this->ordem == 'preco'){
            $produtoQuery->orderBy('preco');
        }

        return view('livewire.produtos-page',[
            'produtos' => $produtoQuery->paginate(9),
            'marcas' => Marca::where('status',1)->get(['id','nome','rotulo']),
            'categorias' => Categoria::where('status',1)->get(['id','nome','rotulo']),
        ]);
    }
}
