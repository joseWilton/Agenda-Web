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

Route::get('/', function () {
    return view('welcome');
});

//grupo de rota
Route::group(['prefix' => 'teste'], function (){ // todas as rotas criadas nesse grupo serão carregadas apartir de teste
Route::get('/teste2', function (){ //essa rota ficará assim: teste/teste2 
        return view('teste');
    });
}); 