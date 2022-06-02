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

Route::group(['prefix' => 'mesas'], function () {
    Route::get('/index', 'App\Http\Controllers\MesaController@index')->name('mesas.index');
    Route::get('/novo', 'App\Http\Controllers\MesaController@novo')->name('mesas.novo');
    Route::post('/cadastrar', 'App\Http\Controllers\MesaController@cadastrar')->name('mesas.cadastrar');
    Route::get('/edicao/{id}', 'App\Http\Controllers\MesaController@edicao')->name('mesas.edicao');
    Route::post('/editar/{id}', 'App\Http\Controllers\MesaController@editar')->name('mesas.editar');
    Route::get('/visualizar/{id}', 'App\Http\Controllers\MesaController@visualizar')->name('mesas.visualizar');
    Route::get('/finalizar/{id}', 'App\Http\Controllers\MesaController@finalizar')->name('mesas.finalizar');
    Route::get('/encerrar/{id}', 'App\Http\Controllers\MesaController@encerrar')->name('mesas.encerrar');
    Route::group(['prefix' => 'produto'], function () {
        Route::get('/index/{mesaID}', 'App\Http\Controllers\ProdutoController@index')->name('produto.index');
        Route::get('/adicionar/{mesaID}/{produtoID}', 'App\Http\Controllers\ProdutoController@adicionar')->name('produto.adicionar');
        Route::get('/edicao/{id}', 'App\Http\Controllers\ProdutoController@edicao')->name('produto.edicao');
        Route::post('/editar/{id}', 'App\Http\Controllers\ProdutoController@editar')->name('produto.editar');
        Route::get('/visualizar/{id}', 'App\Http\Controllers\ProdutoController@visualizar')->name('produto.visualizar');
        Route::get('/excluir/{mesaID}/{produtoID}', 'App\Http\Controllers\ProdutoController@excluir')->name('produto.excluir');
    });
});


Route::get('/', 'App\Http\Controllers\LoginController@login')->name('login');
Route::post('/login', 'App\Http\Controllers\LoginController@login');
Route::get('/logout', 'App\Http\Controllers\LoginController@logout');
Route::post('/logar', 'App\Http\Controllers\LoginController@logar')->name('logar');
