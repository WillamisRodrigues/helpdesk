<?php

namespace App\Http\Controllers;

use App\Aluno;
use DB;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $alunos = DB::table('clientes')->where('nivel','!=' ,1)->get();
        return view('aluno.index', compact('alunos'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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
        $aluno->session()->flash('message', 'Alterado com sucesso');
        return redirect('aluno');
    }

    public function destroy(Aluno $aluno)
    {
        //
    }
}
