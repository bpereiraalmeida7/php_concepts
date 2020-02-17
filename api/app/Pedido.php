<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedidos';

    protected $fillable = [
        'telefone_cliente', 
        'pizza_id',
        'quantidade',
        'status',
        'valor_total'
    ];

    public $timestamps = true;
}