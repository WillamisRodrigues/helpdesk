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
Route::get('arquivados', 'ChamadoController@arquivados');
Route::get('ticket', 'ChamadoController@create');

Route::get('/adicionar_professor', function () {
    return view('professor.create');
});

Route::get('/adicionar_aluno', function () {
    return view('aluno.create');
});
