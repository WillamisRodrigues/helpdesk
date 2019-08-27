<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Informacoes;
use DB;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $nome = $request->get('nome');
        $alunos = DB::table('clientes')->where([
            ['nome','LIKE','%'.$nome.'%'],
            ['nivel','!=', 1]
            ])->paginate(10);
        return view('aluno.index', compact('alunos'));
    }

    public function create()
    {
        return view('aluno.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'matricula'=>'required',
            'email'=>'required|unique:clientes',
        ]);
        
        $aluno = new Aluno();
        $aluno->matricula = $request->get('matricula');
        $aluno->nome = $request->get('nome');
        $aluno->sobrenome = $request->get('sobrenome');
        $aluno->senha = $request->get('senha');
        $aluno->email = $request->get('email');
        $aluno->descricao = 'sua descrição';
        $aluno->caminho = '../upload/padrao.png';
        $aluno->capa = '../upload/capa_padrao.jpg';
        $aluno->nivel = 0;
        $aluno->status = 0;
        $aluno->validate_cod = 'seu codigo';
        $aluno->save();

        $alunoid = $aluno->id_cliente;
        
        $infoAluno = new Informacoes();
        $infoAluno->nome = $request->get('nome');
        $infoAluno->email = $request->get('email');
        $infoAluno->sexo = $request->get('sexo');
        $infoAluno->telefone = $request->get('telefone');
        $infoAluno->cidade = 'cidade';
        $infoAluno->id_cliente = $alunoid;
        $infoAluno->save();

        return redirect()->route('aluno.index')
            ->with('success', 'Cadastrado com sucesso.');

    }

    public function show(Aluno $aluno)
    {
        //
    }

    public function edit(Aluno $aluno)
    {
        return view('aluno.edit', compact('aluno', $aluno));
    }

    public function update(Request $request, Aluno $aluno)
    {
        $request->validate([
            'nome'=>'required',
            'email'=>'required',

        ]);

        $aluno->update($request->all());
        $aluno->save();
        return redirect()->route('aluno.index')
        ->with('info', 'Editado com Sucesso.');
    }

    public function destroy(Aluno $aluno)
    {
        //
    }
}
