<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class treino extends Model
{
    protected $fillable = [
        'treino',
        'descricao',
        'arquivo'
    ];
}
