<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pizza;

class PizzasController extends Controller
{
    public function index()
    {   
        $pizzas = Pizza::all();

        return json_encode($pizzas);
    }

    public function show($id)
    {
        $pizza = Pizza::where("pizzas.id", "=", $id)
        ->select("pizzas.*")
        ->get();

        return json_encode($pizza);
    }
    
    public function create(Request $request)
    {
        try {
            Pizza::insert([
                "sabor"    => $request['sabor'], 
                "tamanho"  => $request['tamanho'],
                "valor"    => $request['valor']
            ]); 
                
            $retorno = [
                "codigo"    => 0,
                "message"   => "Pizza criada com sucesso!"
            ];

        } catch (\Exception $e) {
            $retorno = [
                "codigo"    => 1,
                "message"   => "Erro durante a criação!",
                "exception" => $e
            ];
        }

        return json_encode($retorno);
    }

    public function edit(Request $request)
    {
        try {
            Pizza::where("id", "=", $request->id)
            ->update([
                "sabor"    => $request['sabor'], 
                "tamanho"  => $request['tamanho'],
                "valor"    => $request['valor']
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
            $pizza = Pizza::where(
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
