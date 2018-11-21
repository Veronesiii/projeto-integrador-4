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
    return view('home');
});

Route::get('/about', 'AboutController@about');
Route::post('/cadastro/pessoa-fisica', 'CadastroController@cadastroPessoaFisica');
Route::post('/cadastro/pessoa-juridica', 'CadastroController@cadastroPessoaJuridica');
Route::get('/comingsoon', 'ComingsoonController@comingsoon');
Route::get('/contato', 'ContatoController@contato');
Route::get('/esqueciminhasenha', 'EsqueciMinhaSenhaController@esqueciminhasenha');
Route::get('/faq', 'FaqController@faq');
//Route::get('/home', 'HomeController@index');
Route::get('/logados', 'LogadosController@logados');
Route::get('/login', 'LoginController@login');



Route::get('/produto/{id}', 'ProdutosController@produto');
Route::get('/produtos', 'ProdutosController@produtos');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
