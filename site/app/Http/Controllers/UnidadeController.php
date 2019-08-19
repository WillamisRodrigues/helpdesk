<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unidade;
use DB;

class UnidadeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $unidades = DB::table('unidades')
        ->join('escola_parceira', 'unidades.id_unidade', '=', 'escola_parceira.id_escola')
            ->select('unidades.*', 'escola_parceira.tipo')
            ->get();
        return view('unidades.index', compact('unidades'));
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
