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


Route::get("/pedidos/list", "PedidosController@index");
Route::get("/pedidos/show/{id}", "PedidosController@show");
Route::post("/pedidos/create", "PedidosController@create");
Route::post("/pedidos/update", "PedidosController@edit");
Route::post("/pedidos/destroy", "PedidosController@destroy");