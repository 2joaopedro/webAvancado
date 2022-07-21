<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[\App\Http\Controllers\Principal_Controller::class,'principal'])->name('site.index');
Route::get('/sobre-nos',[\App\Http\Controllers\Sobre_Nos_Controller::class,'sobrenos'])->name('site.sobrenos');
Route::get('/contato',[App\Http\Controllers\Contato_Controller::class, 'contato'])->name('site.contato');
Route::get('/login', function(){return 'Login';})->name('site.login');

Route::prefix('/app')->group(function(){
Route::get('/clientes', function(){return 'Clientes';})->name('app.clientes');
Route::get('/fornecedores', function(){return 'Fornecedores';})->name('app.fornecedores');
Route::get('/produtos', function(){return 'Produtos';})->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}',[\App\Http\Controllers\Teste_Controller::class,'teste'])->name('teste');
/*
Route::get('/rota2', function(){
  return redirect()->route('site.rota1');
})->name('site.rota2');
*/

//Route::redirect('rota2', '/rota1');

Route::fallback(function(){
  echo 'A rota acessada não existe. <a href="'.route('site.index').'">clique aqui</a> para ir para página inicial';
});