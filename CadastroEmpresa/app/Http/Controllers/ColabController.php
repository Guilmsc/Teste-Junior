<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cargo;
use App\Models\Cargo_Colaborador;
use App\Models\Colaborador;
class ColabController extends Controller
{
    public function show(){
        $cargos = Cargo::all();
        $colaboradores = Colaborador::all();
        $colaboradores = Colaborador::with('unidade')->get();
        return view('colaboradores', ['cargos' => $cargos, 'colaboradores' => $colaboradores]);
    }
    public function store(Request $request){
        $colaborador = new Colaborador;
        

        $colaborador->unidade_id = $request->unidade_id;
        $colaborador->nome = $request->nome;
        $colaborador->cpf = $request->cpf;
        $colaborador->email = $request->email;

        


        $colaborador->save();
        
        

        return redirect('colaboradores');
    }
    public function edit($id){
        $colaborador = Colaborador::findorfail($id);
        $cargos = Cargo::all();
        return view('editar',['colaborador' => $colaborador, 'cargos' => $cargos]);

    }
    public function update(Request $request){
        Colaborador::findorfail($request->id)->update($request->all());
        return redirect('/colaboradores')->with('msg', 'Editado com sucesso');
    }
}
