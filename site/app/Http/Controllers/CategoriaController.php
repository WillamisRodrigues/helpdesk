<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use DB;

class CategoriaController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Categoria $categorias)
    {
        $categorias = DB::table('categorias')->get();
        return view('categorias.index', compact('categorias'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }
 
    public function destroy($id)
    {
        //
    }
}
