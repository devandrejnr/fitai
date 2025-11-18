<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Treinos extends Model
{
    protected $fillable = [
        'nome',
        'descricao',
        'tipo',
        'foco',
        'frequencia_semanal'
    ];
}
