<?php

namespace App\Http\Controllers;

use App\Models\Contrato;
use App\Models\contrato as ModelsContrato;
use App\Models\Contratos;
use Illuminate\Http\Request;

class ContratoController extends Controller
{
    public function index(Contrato $contrato)
    {
        $contratos = Contrato::all();
        //dd($contratos);

        return view('pages.contratos')->with('Contrato', $contratos);

    }

    public function create()
    {
        return view('pages.adicionar');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['status'] = 'a';

        Contrato::create($data);
    }

}
