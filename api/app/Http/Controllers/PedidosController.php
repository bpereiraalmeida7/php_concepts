<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Cliente;
use App\Pizza;
use App\Pedido;

class PedidosController extends Controller
{
    public function index()
    {   
        $pedidos = Pedido::join("clientes","clientes.telefone","=","pedidos.telefone_cliente")
        ->join("pizzas","pizzas.id","=","pedidos.pizza_id")
        ->select(
            "pedidos.*",
            "clientes.nome",
            "pizzas.*"
        )
        ->get();
        return json_encode($pedidos);
    }

    public function show($id)
    {
        $pedido = Pedido::where("pedidos.id", "=", $id)
        ->join("clientes","clientes.telefone","=","pedidos.telefone_cliente")
        ->join("pizzas","pizzas.id","=","pedidos.pizza_id")
        ->select(
            "pedidos.*",
            "clientes.nome",
            "pizzas.*"
        )
        ->get();

        return json_encode($pedido);
    }
    
    public function create(Request $request)
    {
        try {
            Pedidos::insert([
                "id"               => $request['id'],
                "telefone_cliente" => $request->endereco['telefone_cliente'], 
                "pizza_id"         => $request->endereco['pizza_id']
            ]); 

            $retorno = [
                "codigo"    => 0,
                "message"   => "Pedido realizado com sucesso!"
            ];

        } catch (\Exception $e) {
            $retorno = [
                "codigo"    => 1,
                "message"   => "Erro durante o pedido!",
                "exception" => $e
            ];
        }

        return json_encode($retorno);
    }

    public function edit(Request $request)
    {
        try {
            Pedido::where("id", "=", $request->id)
            ->update([
                "id"               => $request->id,
                "telefone_cliente" => $request->telefone_cliente, 
                "pizza_id"         => $request->pizza_id
            ]);
            
            $retorno = [
                "codigo"    => 0,
                "message"   => "Edição realizada com sucesso!"
            ];

        } catch (\Exception $e) {
            $retorno = [
                "codigo"    => 1,
                "message"   => "Erro durante a edição!",
                "exception" => $e
            ];
        }

        return json_encode($retorno);

    }

    public function destroy(Request $request)
    {
        try {
            $pedido = Pedido::where(
                "id", "=", $request->id
            )
            ->delete();
            $retorno = [
                "codigo"    => 0,
                "message"   => "Exclusão realizada com sucesso!"
            ];

        } catch (\Exception $e) {
            $retorno = [
                "codigo"    => 1,
                "message"   => "Erro ao excluir!",
                "exception" => $e
            ];
        }

        return json_encode($retorno);
    }
}
