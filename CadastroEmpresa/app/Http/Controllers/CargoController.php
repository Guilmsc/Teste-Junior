<?php

namespace App\Http\Controllers;

use App\Models\Cargo_Colaborador;
use Illuminate\Http\Request;
use App\Models\Colaborador;
use App\Models\cargo;

class CargoController extends Controller
{
    public function avaliar($id){
        $colaborador = Colaborador::findorfail($id);
        $cargos = cargo::all();

        return view('avaliar',['colaborador' => $colaborador, 'cargos' => $cargos]);
 
    }
    public function criar(Request $request){
        $cargoColaborador = new Cargo_Colaborador;
        $cargoColaborador->nota_desempenho = $request->nota_desempenho;

        return view('/colaboradores');
    }
}
