<?php

namespace App\Http\Controllers;

use App\Professor;
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

        $professores = DB::table('clientes')->where('nivel', 1)->get();
        return view('professor.index', compact('professores'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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
        $request->session()->flash('message', 'Alterado com sucesso');
        return redirect('professor');

    }

    public function destroy(Professor $professor)
    {
        //
    }
}
