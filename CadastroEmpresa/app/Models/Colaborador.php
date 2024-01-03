<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    public function unidade(){
        return $this->belongsTo(Unidade::class);
    }
    public function cargo(){
        return $this->belongsTo(cargo::class);
    }
    public function cargo_colaborador(){
        return $this->belongsTo(Cargo_Colaborador::class);
    }
    use HasFactory;
    protected $table = "colaboradores";
    protected $fillable = ['id', 'nome', 'email', 'cargo','cpf', 'unidade_id'];
}
