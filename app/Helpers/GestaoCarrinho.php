<?php

namespace App\Helpers;

use App\Models\Produto;
use Illuminate\Support\Facades\Cookie;

class GestaoCarrinho{

    // adiciona um item ao carrinho
    static public function adicionarItemCarrinho($produto_id){
        $carrinho_itens = self::obterTodosItensCarrinho();

        $existe_item = null;

        foreach ($carrinho_itens as $key => $item) {
            if ($item["produto_id"] == $produto_id) {
                $existe_item = $key;
                break;
            }
        }

        if ($existe_item !== null) {
            $carrinho_itens[$existe_item]["quantidade"]++;
            $carrinho_itens[$existe_item]["preco_total"] = $carrinho_itens[$existe_item]["quantidade"] * $carrinho_itens[$existe_item]["preco_unitario"];

        }else{
            $produto = Produto::where("id", $produto_id)->first(['id', 'nome', 'preco', 'imagens']);
            if($produto){
                $carrinho_itens[] = [
                    'produto_id' => $produto->id,
                    'nome' => $produto->nome,
                    'imagem' => $produto->imagens[0],
                    'quantidade' => 1,
                    'preco_unitario' => $produto->preco,
                    'preco_total' => $produto->preco,
                ];
            }
        }

        self::adicionarItensCarrinhoPorCookie($carrinho_itens);
        return count($carrinho_itens);
    }

    // adiciona item no carrinho com quantidade
    static public function adicionarItemCarrinhoComQuantidade($produto_id, $quantidade = 1){
        $carrinho_itens = self::obterTodosItensCarrinho();

        $existe_item = null;

        foreach ($carrinho_itens as $key => $item) {
            if ($item["produto_id"] == $produto_id) {
                $existe_item = $key;
                break;
            }
        }

        if ($existe_item !== null) {
            $carrinho_itens[$existe_item]["quantidade"] = $quantidade + $item['quantidade'];
            $carrinho_itens[$existe_item]["preco_total"] = $carrinho_itens[$existe_item]["quantidade"] * $carrinho_itens[$existe_item]["preco_unitario"];

        }else{
            $produto = Produto::where("id", $produto_id)->first(['id', 'nome', 'preco', 'imagens']);
            if($produto){
                $carrinho_itens[] = [
                    'produto_id' => $produto->id,
                    'nome' => $produto->nome,
                    'imagem' => $produto->imagens[0],
                    'quantidade' => $quantidade,
                    'preco_unitario' => $produto->preco,
                    'preco_total' => $produto->preco * $quantidade,
                ];
            }
        }

        self::adicionarItensCarrinhoPorCookie($carrinho_itens);
        return count($carrinho_itens);
    }
    // remove um item do carrinho
    static public function removerItemCarrinho($produto_id){
        $carrinho_itens = self::obterTodosItensCarrinho();

        foreach($carrinho_itens as $key => $item){
            if($item['produto_id'] == $produto_id){
                unset($carrinho_itens[$key]);
            }
        }

        self::adicionarItensCarrinhoPorCookie($carrinho_itens);

        return $carrinho_itens;
    }

    // adicionar itens ao carrinho por cookie
    static public function adicionarItensCarrinhoPorCookie($carrinho_itens){
        Cookie::queue('carrinho_itens', json_encode($carrinho_itens), 60 *24 * 30);
    }

    // limpar itens do carrinho por cookie
    static public function limparItensCarrinho(){
        Cookie::queue(Cookie::forget('carrinho_itens'));
    }

    // obter todos itens do carrinho por cookie
    static public function obterTodosItensCarrinho(){
        $carrinho_itens = json_decode(Cookie::get('carrinho_itens'), true);
        if(!$carrinho_itens){
            $carrinho_itens = [];
        }

        return $carrinho_itens;
    }

    // adicionar quantidade de item no carrinho
    static public function adicionarQuantidadeItemCarrinho($produto_id){
        $carrinho_itens = self::obterTodosItensCarrinho();

        foreach($carrinho_itens as $key => $item){
            if($item['produto_id'] == $produto_id){
                $carrinho_itens[$key]['quantidade']++;
                $carrinho_itens[$key]['preco_total'] = $carrinho_itens[$key]['quantidade'] * $carrinho_itens[$key]['preco_unitario'];
            }
        }

        self::adicionarItensCarrinhoPorCookie($carrinho_itens);
        return $carrinho_itens;
    }

    // remover quantidade de itens no carrinho
    static public function removerQuantidadeItemCarrinho($produto_id){
        $carrinho_itens = self::obterTodosItensCarrinho();

        foreach($carrinho_itens as $key => $item){
            if($item['produto_id'] == $produto_id){
               if($carrinho_itens[$key]['quantidade'] > 1){
                   $carrinho_itens[$key]['quantidade']--;
                   $carrinho_itens[$key]['preco_total'] = $carrinho_itens[$key]['quantidade'] * $carrinho_itens[$key]['preco_unitario'];
               }
            }
        }

        self::adicionarItensCarrinhoPorCookie($carrinho_itens);
        return $carrinho_itens;
    }

    // calcular valor total do carrinho

    static public function calcularValorTotalCarrinho($itens){
        return array_sum(array_column($itens,'preco_total'));
    }
}


