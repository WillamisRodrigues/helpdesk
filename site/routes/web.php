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

Route::resource('aluno', 'AlunoController');
Route::resource('professor','ProfessorController');

Route::get('/editar_aluno', function () {
    return view('aluno.edit');
});


Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/ticket', function () {
    return view('ticket.index');
});

Route::get('/chamados', function () {
    return view('chamados.index');
});

Route::get('/unidades', function () {
    return view('unidades.index');
});


Route::get('/categorias', function () {
    return view('categorias.index');
});

Route::get('/usuarios', function () {
    return view('usuarios.index');
});

Route::get('/arquivados', function () {
    return view('arquivados.index');
});

