<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedidos';

    protected $fillable = [
        'telefone_cliente', 
        'pizza_id'
    ];

    public $timestamps = true;
}
