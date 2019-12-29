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

Route::get('/', 'PagesController@index');

Auth::routes();

Route::get('/home', 'PagesController@index')->name('home');


Route::get('/about', 'PagesController@about'); // a sintaxe do caminho também poderia ser 'pages_templates/about'

Route::get('/services', 'PagesController@services');


// testes com rota dinamica
//Route::get('/users/{aaaa}/{bbb}', function ($id, $nome) {
//    return "Esse é o usuário " . $nome . " com id número: " . $id;
//});