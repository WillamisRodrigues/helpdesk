<?php

namespace App\Http\Controllers;

use App\AlunoImugi;
use App\Informacoes;
use DB;
use Illuminate\Http\Request;

class AlunoImugiController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $alunos = DB::connection('another2')->table('alunos_cadastro')->paginate(10);
      
        return view('alunoImugi.index',compact('alunos'));
    }

    public function busca(Request $request)
    {
        $busca = $request->get('nome');
        $alunos = DB::connection('another2')->table('alunos_cadastro')->where([
            ['email','LIKE','%'.$busca.'%'],
            ['senha','LIKE','%'.$busca.'%']
            ])->orWhere('matricula', 'LIKE', '%'.$busca.'%')->paginate(10);

           
                return view('alunoImugi.index', compact('alunos'));
    }

    public function show(Aluno $aluno)
    {
        //
    }

    public function edit($matricula)
    {
        $aluno = DB::connection('another2')->table('alunos_cadastro')->where('matricula',$matricula)->first();
        return view('alunoImugi.edit', compact('aluno', $aluno));
    }

    public function update(Request $request, AlunoImugi $aluno)
    {
        $request->validate([
            'email'=>'required',
        ]);

        $aluno = DB::connection('another')
        ->table('alunos_cadastro')
        ->where('matricula',$request->get('matricula'))
        ->update(['email' => $request->get('email'),'senha' => $request->get('senha')]);
 
        return redirect()->route('alunoImugi.index')
        ->with('info', 'Editado com Sucesso.');
    }

    public function destroy(Aluno $aluno)
    {
        //
    }
}
