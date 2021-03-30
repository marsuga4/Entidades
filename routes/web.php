<?php
use Illuminate\Support\Facades\Route;

Route::name('entidade.')->prefix('entidades')->group(function(){
    //quando o usuário digitar "entidades" no navegador, vamos enviar a requisição para o EntidadesController, acessando o método index
    Route::get('/', 'EntidadesController@index')->name('index');
    Route::get('/criar', 'EntidadesController@create')->name('criar.get');
    //tratar dados do formulário
    Route::post('/store', 'EntidadesController@store')->name('store');
    //enviar o id da série ao banco de dados
    Route::delete('/{id}', 'EntidadesController@destroy')->name('delete');
    Route::get('/show','EntidadesController@show')->name('show');
});



