<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chamado;
use App\Unidade;
use App\Categoria;
use DB;

class ChamadoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $chamados = DB::table('chamados')
        ->join('unidades', 'chamados.id_escola', '=', 'unidades.id_unidade')
            ->join('categorias', 'chamados.id_categoria', '=', 'categorias.id_categoria')
            ->select('chamados.*', 'unidades.nome_unidade', 'categorias.nome_categoria')
            ->where('status', 0)
            ->get();
        return view('chamados.index', compact('chamados'));
    }

    public function arquivados(){
        $chamados = DB::table('chamados')
        ->join('unidades', 'chamados.id_escola', '=', 'unidades.id_unidade')
        ->join('categorias', 'chamados.id_categoria', '=', 'categorias.id_categoria')
        ->where('status', 1)
        ->get();
        return view('arquivados.index', compact('chamados'));
    }
    

    public function create()
    {
        $categorias = Categoria::all();
        $unidades = Unidade::all();
        return view('chamados.create',compact('categorias','unidades'));
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }

    
    public function edit(Chamado $chamado)
    {
        $categoria = Categoria::all();
        return view('chamados.edit', compact('chamado', 'categoria', $chamado));
    }

    public function update(Request $request, Chamado $chamado)
    {
        $request->validate([
            'titulo_chamado'=>'required',
            'observacao'=>'required',

        ]);

        $chamado->update($request->all());
        $chamado->save();
        $request->session()->flash('message', 'Alterado com sucesso');
        return redirect('chamados');
    }


    public function destroy($id)
    {
        //
    }
}
