<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'rotulo',
        'imagens',
        'descricao',
        'preco',
        'status',
        'destaque',
        'estoque',
        'venda',
        'categoria_id',
        'marca_id',
    ];

    protected $casts = [
        'imagens' => 'array',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }

    public function pedidoItens()
    {
        return $this->hasMany(PedidoItem::class);
    }
}
