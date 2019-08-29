<?php

namespace App\Http\Controllers;

use App\Professor;
use App\Informacoes;
use DB;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $professores = DB::table('clientes')->where('nivel', 1)->paginate(10);
        return view('professor.index', compact('professores'));
    }

    public function busca(Request $request)
    {
        $busca = $request->get('nome');
        $professores = DB::table('clientes')->where([
            ['email','LIKE','%'.$busca.'%'],
            ['nivel', 1]
            ])->orWhere('matricula', 'LIKE', '%'.$busca.'%')->paginate(10);

           
                return view('professor.index', compact('professores'));
    }

    public function create()
    {
        return view('professor.create');  
    }

    public function store(Request $request)
    {
        $request->validate([
        
            'email'=>'required|unique:clientes',
        ]);
        
        $professor = new Professor();
        $professor->matricula = 0;
        $professor->nome = $request->get('nome');
        $professor->sobrenome = $request->get('sobrenome');
        $professor->senha = $request->get('senha');
        $professor->email = $request->get('email');
        $professor->descricao = 'sua descrição';
        $professor->caminho = '../upload/padrao.png';
        $professor->capa = '../upload/capa_padrao.jpg';
        $professor->nivel = 1;
        $professor->status = 0;
        $professor->validate_cod = 'seu codigo';
        $professor->save();

        $professorid = $professor->id_cliente;
        
        $infoAluno = new Informacoes();
        $infoAluno->nome = $request->get('nome');
        $infoAluno->email = $request->get('email');
        $infoAluno->sexo = $request->get('sexo');
        $infoAluno->telefone = $request->get('telefone');
        $infoAluno->cidade = 'cidade';
        $infoAluno->id_cliente = $professorid;
        $infoAluno->save();

        return redirect()->route('professor.index')
            ->with('success', 'Cadastrado com sucesso.');
    }

    public function show(Professor $professor)
    {
        //
    }

    public function edit(Professor $professor)
    {
        return view('professor.edit', compact('professor', $professor));
    }

    public function update(Request $request, Professor $professor)
    {
        $request->validate([
            'nome'=>'required',
            'email'=>'required',

        ]);

        $professor->update($request->all());
        $professor->save();
        
        return redirect()->route('professor.index')
            ->with('info', 'Editado com sucesso.');

    }

    public function destroy(Professor $professor)
    {
        //
    }
}
