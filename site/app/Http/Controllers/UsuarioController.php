<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use DB;

class UsuarioController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $usuarios = DB::table('users')->get();
        return view('usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'titulo_chamado'=>'required',
        //     'observacao'=>'required',

        // ]);

            $usuario = new User();
            $usuario->name = $request->get('name');
            $usuario->email = $request->get('email');
            $usuario->password = $request->get('password');
            $usuario->save();

            return redirect()->route('usuarios.index')
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
