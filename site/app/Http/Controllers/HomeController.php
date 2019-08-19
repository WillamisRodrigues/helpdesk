<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professor;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $totalProfessor = Professor::where('nivel','=',1)->count();
        $totalAlunoFree = Professor::where('nivel','=',0)->count();
        $totalAlunoPremium = Professor::where('nivel','=',3)->count();
        return view('home.index',compact('totalProfessor','totalAlunoFree','totalAlunoPremium'));
    }
}
