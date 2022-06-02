<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class funcionario extends Model
{
    protected $table = "funcionario";

    protected $fillable = ['nome', 'email', 'senha', 'cargo'];

    public function mesa(){
        return $this->hasMany(mesa::class);
    }
    use HasFactory;
}
