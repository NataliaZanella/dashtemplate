<?php

namespace App\Http\Controllers;

use App\Models\contrato;
use App\Models\saldos;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
     * @return \Illuminate\View\View
     */
    public function index() 
    {
        $saldos = saldos::all();
        //dd($saldos);

        return view('pages.dashboard')->with('saldos', $saldos);

        //$contratos = contrato::get();
        //dd($contratos);

        //return view('pages.contratos', [
        //'contratos' => $contratos 
        //] );
        
    }

    // public function create()
    // {

    //     return view('pages.adicionar');

    // }

}
