<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    protected $fillable = ['nome', 'descricao', 'preço'];

    public function mesa()
    {
        return $this->belongsTo(itemMesa::class);
    }
    use HasFactory;
}
