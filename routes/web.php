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

Route::get('/editoras', 'EditoraController@index');

Route::get('/editoras/cria', 'EditoraController@cria');

Route::post('/editoras', 'EditoraController@armazena');

Route::get('/editoras/{editora}', 'EditoraController@show');

Route::get('/editoras/{editora}/edicao', 'EditoraController@edicao');

Route::patch('/editoras/{editora}', 'EditoraController@atualiza');

// Livro

Route::get('/livros', 'LivroController@index');

Route::get('/livros/cria', 'LivroController@cria');

Route::post('/livros', 'LivroController@armazena');

Route::get('/livros/{livro}', 'LivroController@show');

Route::get('/livros/{livro}/edicao', 'LivroController@edicao');

Route::patch('/livros/{livro}', 'LivroController@atualiza');