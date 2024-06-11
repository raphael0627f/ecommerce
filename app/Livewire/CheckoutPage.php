<?php

namespace App\Livewire;

use App\Helpers\GestaoCarrinho;
use App\Mail\PedidoCriado;
use App\Models\Endereco;
use App\Models\Pedido;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Title;
use Livewire\Component;
use Stripe\Checkout\Session;
use Stripe\Stripe;

#[Title('Checkout - Charme Jóias')]
class CheckoutPage extends Component
{
    public $primeiro_nome;
    public $sobrenome;
    public $celular;
    public $cep;
    public $rua;
    public $numero;
    public $complemento;
    public $bairro;
    public $cidade;
    public $estado;
    public $referencia;
    public $metodo_pagamento;

    public function comprar(){

        $this->validate([
            'primeiro_nome'=> 'required',
            'sobrenome'=> 'required',
            'celular'=> 'required',
            'cep'=> 'required',
            'rua'=> 'required',
            'numero'=> 'required',
            'complemento'=> 'required',
            'bairro'=> 'required',
            'cidade'=> 'required',
            'estado'=> 'required',
            'referencia'=> 'required',
            'metodo_pagamento'=> 'required',
        ]);

        $carrinho_itens = GestaoCarrinho::obterTodosItensCarrinho();

        $line_itens = [];

        foreach ($carrinho_itens as $item) {
            $line_itens[] = [
                'price_data' => [
                    'currency' => 'brl',
                    'unit_amount' => $item['preco_unitario']*100,
                    'product_data' => [
                        'name' => $item['nome'],
                    ]
                ],
                'quantity' => $item['quantidade'],
            ];
        }

        $pedido = new Pedido();
        $pedido->usuario_id = auth()->user()->id;
        $pedido->valor_total = GestaoCarrinho::calcularValorTotalCarrinho($carrinho_itens);
        $pedido->metodo_pagamento = $this->metodo_pagamento;
        $pedido->status_pagamento = 'pendente';
        $pedido->status = 'pendente';
        $pedido->valor_envio = 0;
        $pedido->metodo_envio = 'none';
        $pedido->observacao = 'Pedido feito por ' . auth()->user()->name;

        $endereco = new Endereco();
        $endereco->primeiro_nome = $this->primeiro_nome;
        $endereco->sobrenome = $this->sobrenome;
        $endereco->celular = $this->celular;
        $endereco->cep = $this->cep;
        $endereco->rua = $this->rua;
        $endereco->numero = $this->numero;
        $endereco->complemento = $this->complemento;
        $endereco->bairro = $this->bairro;
        $endereco->cidade = $this->cidade;
        $endereco->estado = $this->estado;
        $endereco->referencia = $this->referencia;

        $redirecionar_url = '';

        if($this->metodo_pagamento == 'cartao'){
            Stripe::setApiKey(env('STRIPE_SECRET'));
            $sessionCheckout = Session::create([
                'payment_method_types' => ['card'],
                'customer_email' => auth()->user()->email,
                'line_items' => $line_itens,
                'mode' => 'payment',
                'success_url' => route('success') . '?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => route('cancel'),
            ]);

            $redirecionar_url =$sessionCheckout->url;
        }else{
            $redirecionar_url = route('success');
        }

        $pedido->save();
        $endereco->pedido_id = $pedido->id;
        $endereco->save();
        $pedido->itens()->createMany($carrinho_itens);
        GestaoCarrinho::limparItensCarrinho();
        Mail::to(request()->user())->send(new PedidoCriado($pedido));

        return redirect($redirecionar_url);
    }

    public function mount()
    {
        $carrinho_itens = GestaoCarrinho::obterTodosItensCarrinho();
        if(count($carrinho_itens) == 0){
            return redirect()->route('produtos');
        }
    }

    public function render()
    {
        $carrinho_itens = GestaoCarrinho::obterTodosItensCarrinho();
        $valor_total = GestaoCarrinho::calcularValorTotalCarrinho($carrinho_itens);
        return view('livewire.checkout-page', [
            'carrinho_itens' => $carrinho_itens,
            'valor_total' => $valor_total,
        ]);
    }
}
