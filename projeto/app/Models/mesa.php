<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mesa extends Model
{

    public function funcionario(){
        return $this->belongsTo(funcionario::class);
    }

    public function produtos(){
        return $this->belongsToMany(produto::class);
    }
    use HasFactory;
}
