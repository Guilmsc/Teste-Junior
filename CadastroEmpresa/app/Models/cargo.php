<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cargo extends Model
{
    public function colaborador(){
        return $this->hasMany(Colaborador::class);
    }

    public function cargoColaborador(){
        return $this->hasMany(Cargo_Colaborador::class);
    }
    protected $fillable = ['cargo', 'id'];
    use HasFactory;
}
