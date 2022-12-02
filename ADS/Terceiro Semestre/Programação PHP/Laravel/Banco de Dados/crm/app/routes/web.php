<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\ServicoController;

Route::get('/customer', function () {
    return view('mdb.mdb-home');
});

Route::get('/moto', function () {
    return view('mdb.mdb-moto');
});

Route::get('/carro', function () {
    return view('mdb.mdb-carro');
});

Route::get('/somos', function () {
    return view('mdb.mdb-somos');
});

Route::get('/contato', function () {
    return view('mdb.mdb-contato');
});
//Route::get('/login', function () {
  //  return view('mdb.login');
//});
Route::get('/aprese', function () {
    return view('site.apresentacao');
});

Route::get('/listagem', function () {
    return view('site.listagem');
});

Route::get('/cadastro', function () {
    return view('site.cadastro');
});
Route::any('/cadastroFornecedor', [FornecedorController::class, 'cadastro']);
Route::any('/fornecedorLista', [FornecedorController::class, 'lista']);

Route::any('/cadastroCliente', [ClienteController::class, 'cadastro']);
Route::any('/clienteLista', [ClienteController::class, 'lista']);

Route::any('/cadastroVeiculo', [VeiculoController::class, 'cadastro']);
Route::any('/veiculoLista', [VeiculoController::class, 'lista']);

Route::any('/cadastroProduto', [ProdutoController::class, 'cadastro']);
Route::any('/produtoLista', [ProdutoController::class, 'lista']);

Route::any('/cadastroVenda', [VendaController::class, 'cadastro']);
Route::any('/vendaLista', [VendaController::class, 'lista']);


Route::any('/cadastroServico', [ServicoController::class, 'cadastro']);
Route::any('/servicoLista', [ServicoController::class, 'lista']);



