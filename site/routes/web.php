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
Route::resource('alunoGracom', 'AlunoGracomController');
Route::resource('professor', 'ProfessorController');
Route::resource('unidades', 'UnidadeController');
Route::resource('chamados', 'ChamadoController');
Route::resource('usuarios', 'UsuarioController');
Route::resource('categorias', 'CategoriaController');
Route::get('arquivados', 'ChamadoController@arquivados');
Route::get('ticket', 'ChamadoController@create');
Route::get('adicionar_unidade', 'UnidadeController@create');
Route::get('adicionar_categoria', 'CategoriaController@create');
Route::get('adicionar_usuario', 'UsuarioController@create');
Route::get('adicionar_aluno', 'AlunoController@create');
Route::get('busca', 'AlunoController@busca');
Route::get('buscaProfessor', 'ProfessorController@busca');
Route::get('adicionara_professor', 'ProfessorController@create');