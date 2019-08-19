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
        $unidades = DB::table('unidade')
        ->join('escola_parceira', 'unidade.tipo', '=', 'escola_parceira.id_escola')
            ->select('unidade.*', 'escola_parceira.tipo')
            ->get();
        return view('unidades.index', compact('unidades'));
    }

    public function create()
    {
        $escolas = DB::table('escola_parceira')->get();
        return view('unidades.create', compact('escolas'));
    }

    public function store(Request $request)
    {
         // $request->validate([
        //     'titulo_chamado'=>'required',
        //     'observacao'=>'required',

        // ]);

        $unidade = new Unidade();
        $unidade->unidade = $request->get('unidade');
        $unidade->tipo = $request->get('tipo');
        $unidade->save();

        return redirect()->route('unidades.index')
        ->with('sucess','Cadastro com sucesso');
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
