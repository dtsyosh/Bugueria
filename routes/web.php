<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
    return view('home');
});



Route::group(['middleware' => ['auth']], function () {
    Route::resource('ingredientes', 'IngredientesController');
});

Route::group(['middleware' => ['auth']], function () {
    Route::resource('pizzas', 'PizzasController');
});

Route::group(['middleware' => ['auth']], function () {
    Route::resource('admin', 'AdminController');
});



Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/cardapio', 'PizzasController@cardapio');
Route::get('/monte-sua-pizza', 'PizzasController@monte_sua_pizza');

Route::post('/adicionar-carrinho', 'PizzasController@getAddCarrinhoP');
Route::get('/adicionar-carrinho/{id}', 'Pizzascontroller@getAddCarrinho');
Route::get('/carrinho', 'PizzasController@getCarrinho');
Route::get('/remover-carrinho/{pizza}', 'PizzasController@getRemoveCarrinho');
Route::get('/finalizar-compra', 'PedidoController@finalizar_compra');
Route::get('/limpar/sessao/{key}', 'PedidoController@limpar_sessao');
Route::post('/finalizar-compra', 'PedidoController@store');