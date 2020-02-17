<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Clientes:
Route::get("/clientes/list", "ClientesController@index");
Route::get("/clientes/show/{id}", "ClientesController@show");
Route::post("/clientes/create", "ClientesController@create");
Route::post("/clientes/update", "ClientesController@edit");
Route::post("/clientes/destroy", "ClientesController@destroy");

//Pizzas:
Route::get("/pizzas/list", "PizzasController@index");
Route::get("/pizzas/show/{id}", "PizzasController@show");
Route::post("/pizzas/create", "PizzasController@create");
Route::post("/pizzas/update", "PizzasController@edit");
Route::post("/pizzas/destroy", "PizzasController@destroy");

//Pedidos:
Route::get("/pedidos/list", "PedidosController@index");
Route::get("/pedidos/show/{id}", "PedidosController@show");
Route::post("/pedidos/create", "PedidosController@create");
Route::post("/pedidos/update", "PedidosController@edit");
Route::post("/pedidos/destroy", "PedidosController@destroy");