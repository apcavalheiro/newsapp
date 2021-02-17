<?php

Route::get('/','NoticiasController@index');
Route::get('/nova_noticia','NoticiasController@create');
Route::post('/salvar_noticia','NoticiasController@store');
Route::get('/gerir_noticias','NoticiasController@apresentarListaGestao');
Route::get('/visivel/{id}', 'NoticiasController@noticiaVisivel');
Route::get('/invisivel/{id}', 'NoticiasController@noticiaInvisivel');
Route::get('/delete_noticia/{id}', 'NoticiasController@destroy');
Route::get('/editar_noticia/{id}', 'NoticiasController@edit');
Route::post('/atualizar_noticia/{id}', 'NoticiasController@update');

