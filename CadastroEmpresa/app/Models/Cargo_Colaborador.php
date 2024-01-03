<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo_Colaborador extends Model
{
    protected $fillable = ['colaborador_id', 'cargo_id', 'nota_desempenho'];

    public function cargo(){
        return $this->belongsTo(cargo::class);
    }
    public function colaborador(){
        return $this->belongsTo(Colaborador::class);
    }
    protected $table = "cargocolaborador";

    use HasFactory;
}
