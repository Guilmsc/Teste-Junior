<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unidade;
use App\Models\Colaborador;
use Illuminate\Support\Facades\DB;

class UnidadesController extends Controller
{
    public function show(){
        $unidades = Unidade::all();
        
        
        return view('unidades',['unidades'=>$unidades]);
    }

    public function store(Request $request){
        $unidade = new Unidade;

        $unidade->nome_fantasia = $request->nome_fantasia;
        $unidade->razao_Social = $request->razao_Social;
        $unidade->cnpj = $request->cnpj;

        $unidade->save();

        return redirect('unidades')->with('msg', 'Unidade adicionada com sucesso');
    }
}
