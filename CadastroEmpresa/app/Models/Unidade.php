<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    public function colaborador(){
        return $this->hasMany(Colaborador::class);
    }
    protected $guarded = [];
    
    
    use HasFactory;
}
