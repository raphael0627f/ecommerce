<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'usuario_id',
        'valor_total',
        'metodo_pagamento',
        'status_pagamento',
        'status',
        'valor_envio',
        'observacao',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }

    public function itens()
    {
        return $this->hasMany(PedidoItem::class);
    }

    public function endereco()
    {
        return $this->hasOne(Endereco::class);
    }
}
