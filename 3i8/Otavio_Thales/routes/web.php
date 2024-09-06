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

Route::get('/', 'ValidarController@Principal')->name('principal');

Route::get('/topo', 'ValidarController@Teste')->name('topo');


Route::fallback(function(){
    echo '<center><h3>A rota acessada não existe. <a href="'.route('principal').'"> Clique aqui</a>
    para ir para página inicial<h3></center>';
});
