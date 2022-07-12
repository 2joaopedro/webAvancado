<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',[\App\Http\Controllers\Principal_Controller::class,'principal']);
Route::get('/sobre-nos',[\App\Http\Controllers\Sobre_Nos_Controller::class,'sobrenos']);
Route::get('/contato',[App\Http\Controllers\Contato_Controller::class, 'contato']);