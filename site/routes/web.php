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

<<<<<<< HEAD
Route::resource('aluno', 'AlunoController');
Route::resource('professor','ProfessorController');
=======
>>>>>>> 7e62d0e58d93286610b333c111534293d277f332

Route::get('/editar_aluno', function () {
    return view('aluno.edit');
});

<<<<<<< HEAD

=======
>>>>>>> 7e62d0e58d93286610b333c111534293d277f332
Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::resource('home', 'HomeController');
Route::resource('aluno', 'AlunoController');
Route::resource('professor', 'ProfessorController');
Route::resource('unidades', 'UnidadeController');
Route::resource('chamados', 'ChamadoController');
Route::resource('usuarios', 'UsuarioController');
Route::resource('categorias', 'CategoriaController');

Route::get('/ticket', function () {
    return view('ticket.index');
});

Route::get('/arquivados', function () {
    return view('arquivados.index');
});

