<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Endereco extends Model
{
    use HasFactory;

    protected $fillable = [
        'pedido_id',
        'primeiro_nome',
        'sobrenome',
        'celular',
        'cep',
        'rua',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'estado',
        'referencia',
    ];

    public function pedido()
    {
        return $this->belongsTo(Pedido::class);
    }

    public function getFullNameAttribute()
    {
        return "{$this->primeiro_nome} {$this->sobrenome}";
    }
}
