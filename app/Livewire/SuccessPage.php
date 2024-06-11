<?php

namespace App\Livewire;

use App\Models\Pedido;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Stripe\Checkout\Session;
use Stripe\Stripe;

#[Title('Sucesso - Charme Joias')]
class SuccessPage extends Component
{
    #[Url]
    public $session_id;

    public function render()
    {
        $pedido_recente = Pedido::with('endereco')->where('usuario_id',auth()->user()->id)->latest()->first();

        if($this->session_id){
            Stripe::setApiKey(env('STRIPE_SECRET'));
            $session_info = Session::retrieve($this->session_id);

            if($session_info->payment_status != 'paid'){
                $pedido_recente->status_pagamento = 'falhou';
                $pedido_recente->save();
                return redirect()->route('cancel');
            }else if ($session_info->payment_status == 'paid'){
                $pedido_recente->status_pagamento = 'aprovado';
                $pedido_recente->save();
            }
        }

        return view('livewire.success-page',[
            'pedido' => $pedido_recente,
        ]);
    }
}
