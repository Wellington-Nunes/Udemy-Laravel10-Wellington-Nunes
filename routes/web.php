<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TagsProdutosController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\VendaController;
use Illuminate\Support\Facades\Route;

// DashBoard
Route::prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
});


//Produtos
Route::prefix('produtos')->group(function () {
    Route::get('/', [ProdutosController::class, 'index'])->name('produtos.index');

    Route::get('/cadastrarProduto', [ProdutosController::class, 'cadastrarProduto'])->name('cadastrar.produto');
    Route::post('/cadastrarProduto', [ProdutosController::class, 'cadastrarProduto'])->name('cadastrar.produto');
    
    Route::get('/atualizarProduto/{id}', [ProdutosController::class, 'atualizarProduto'])->name('atualizar.produto');
    Route::put('/atualizarProduto/{id}', [ProdutosController::class, 'atualizarProduto'])->name('atualizar.produto');
    
    Route::delete('/delete', [ProdutosController::class, 'delete'])->name('produtos.delete');
});

//Clientes
Route::prefix('clientes')->group(function () {
    Route::get('/', [ClientesController::class, 'index'])->name('clientes.index');

    Route::get('/cadastrarCliente', [ClientesController::class, 'cadastrarCliente'])->name('cadastrar.cliente');
    Route::post('/cadastrarCliente', [ClientesController::class, 'cadastrarCliente'])->name('cadastrar.cliente');
    
    Route::get('/atualizarCliente/{id}', [ClientesController::class, 'atualizarCliente'])->name('atualizar.cliente');
    Route::put('/atualizarCliente/{id}', [ClientesController::class, 'atualizarCliente'])->name('atualizar.cliente');

    Route::delete('/delete', [ClientesController::class, 'delete'])->name('cliente.delete');
});

// Vendas
Route::prefix('vendas')->group(function () {
    Route::get('/', [VendaController::class, 'index'])->name('vendas.index');

    Route::get('/cadastrarVenda', [VendaController::class, 'cadastrarVenda'])->name('cadastrar.venda');
    Route::post('/cadastrarVenda', [VendaController::class, 'cadastrarVenda'])->name('cadastrar.venda');

    Route::get('/enviaComprovantePorEmail/{id}', [VendaController::class, 'enviaComprovantePorEmail'])->name('enviaComprovantePorEmail.venda');
});

// Usuários
Route::prefix('usuario')->group(function () {
    Route::get('/', [UsuarioController::class, 'index'])->name('usuario.index');
    
    Route::get('/cadastrarUsuario', [UsuarioController::class, 'cadastrarUsuario'])->name('cadastrar.usuario');
    Route::post('/cadastrarUsuario', [UsuarioController::class, 'cadastrarUsuario'])->name('cadastrar.usuario');
    
    Route::get('/atualizarUsuario/{id}', [UsuarioController::class, 'atualizarUsuario'])->name('atualizar.usuario');
    Route::put('/atualizarUsuario/{id}', [UsuarioController::class, 'atualizarUsuario'])->name('atualizar.usuario');
    
    Route::delete('/delete', [UsuarioController::class, 'delete'])->name('usuario.delete');
});

//Tags
Route::prefix('tag')->group(function () {
    Route::get('/', [TagController::class, 'index'])->name('tags.index');
    
    Route::get('/cadastrarTag', [TagController::class, 'cadastrarTag'])->name('cadastrar.tag');
    Route::post('/cadastrarTag', [TagController::class, 'cadastrarTag'])->name('cadastrar.tag');
    
    Route::get('/atualizarTag/{id}', [TagController::class, 'atualizarTag'])->name('atualizar.tag');
    Route::put('/atualizarTag/{id}', [TagController::class, 'atualizarTag'])->name('atualizar.tag');
    
    Route::delete('/delete', [TagController::class, 'delete'])->name('tag.delete');
});

//Tags de produto
Route::prefix('tags-produto')->group(function () {
    Route::get('/', [TagsProdutosController::class, 'index'])->name('tags-produto.index');

    Route::get('/cadastrarTagProduto', [TagsProdutosController::class, 'cadastrarTagProduto'])->name('cadastrar.tag-produto');
    Route::post('/cadastrarTagProduto', [TagsProdutosController::class, 'cadastrarTagProduto'])->name('cadastrar.tag-produto');
    
    Route::get('/atualizarTagProduto/{id}', [TagsProdutosController::class, 'atualizarTagProduto'])->name('atualizar.tag-produto');
    Route::put('/atualizarTagProduto/{id}', [TagsProdutosController::class, 'atualizarTagProduto'])->name('atualizar.tag-produto');
    
    Route::delete('/delete', [TagsProdutosController::class, 'delete'])->name('tags-produto.delete');
}); 