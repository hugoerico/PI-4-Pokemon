<?php

use App\Http\Controllers\ApiProdutosController;
use App\Http\Controllers\ApiPedidosController;
use App\Http\Controllers\ApiCategoriaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CarrinhoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::group(['middleware'=>'auth:sanctum'],function(){

    //aqui precisa estar logado
   //logoff
Route::get('/logoff',[UsuarioController::class, 'logoff']);
    //carrinho


Route::get('/carrinho/remove/{produto}',[CarrinhoController::class,'remove'])->name('carrinho.remove');
 
  //endereço
Route::post('/endereco',[UsuarioController::class,'endereco']);
Route::post('update/endereco',[UsuarioController::class,'updateEndereco']);

//pedidos




});
//midfeopsjfsopgjewpd
Route::get('/carrinho/show/',[CarrinhoController::class,'show'])->name('carrinho.show');
Route::post('/pedidos/add/',[ApiPedidosController::class,'add']);
Route::post('/carrinho/add/{produto}',[CarrinhoController::class,'add'])->name('carrinho.add');
Route::post('/carrinho/remove/{produto}',[CarrinhoController::class,'remove'])->name('carrinho.remove');
Route::get('/pedidos/show/',[ApiPedidosController::class,'show'])->name('pedido.show');



//todos os produtos
Route::get('/produtos',[ApiProdutosController::class,'index']);

//1 produto
//Route::get('/produto/{produto}',[ApiProdutosController::class,'show']);
//1 produto
Route::get('/produto/{id}',[ApiProdutosController::class,'show']);

//buscar produto no Pesquisar
Route::get('/produtos/buscar/{nome}',[ApiProdutosController::class,'search']);


//buscar produto por categoria
Route::get('produtos/categoria/buscar/{nome}',[ApiCategoriaController::class,'search']);
Route::get('/categorias',[ApiCategoriaController::class,'show']);


//login
Route::post('/login',[UsuarioController::class,'login']);

//registrar
Route::post('/registrar',[UsuarioController::class,'store']);



//pedidos
Route::get('/pedidos/add/{produto}',[ApiPedidosController::class,'add']);





