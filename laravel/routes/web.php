<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[\App\Http\Controllers\Principal_Controller::class,'principal']);
Route::get('/sobre-nos',[\App\Http\Controllers\Sobre_Nos_Controller::class,'sobrenos']);
Route::get('/contato',[App\Http\Controllers\Contato_Controller::class, 'contato']);

route::get('/contato/{nome}/{categoria}/{assunto?}', function(string $nome, string $categoria, string $assunto = 'assunto não informada'){
  echo "Estamos aqui: $nome - $categoria - $assunto";

});
