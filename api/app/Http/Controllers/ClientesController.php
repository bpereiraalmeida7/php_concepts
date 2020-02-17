<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Cliente;

class ClientesController extends Controller
{
    public function index()
    {   
        $clientes = Cliente::all();

        return json_encode($clientes);
    }

    public function show($id)
    {
        $cliente = Cliente::where("clientes.id", "=", $id)
        ->select("clientes.*")
        ->get();

        return json_encode($cliente);
    }
    
    public function create(Request $request)
    {
        try {
            Clientes::insert([
                "nome"        => $request['nome'], 
                "telefone"    => $request['telefone'],
                "CEP"         => $request['CEP'],
                "rua"         => $request['rua'],
                "complemento" => $request['complemento'],
            ]); 
            
            $retorno = [
                "codigo"    => 0,
                "message"   => "Cliente cadastrado com sucesso!"
            ];

        } catch (\Exception $e) {
            $retorno = [
                "codigo"    => 1,
                "message"   => "Erro durante o cadastro!",
                "exception" => $e
            ];
        }

        return json_encode($retorno);
    }

    public function edit(Request $request)
    {
        try {
            Cliente::where("id", "=", $request->id)
            ->update([
                "nome"        => $request['nome'], 
                "telefone"    => $request['telefone'],
                "CEP"         => $request['CEP'],
                "rua"         => $request['rua'],
                "complemento" => $request['complemento'],
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
            $cliente = Cliente::where(
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
