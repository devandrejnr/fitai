<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TiposTreino extends Model
{
    protected $table = 'tipos_treino';
    const CREATED_AT = 'criado_em';
    const UPDATED_AT = 'atualizado_em';

    protected $fillable = [
        'nome',
        'descricao',
        'nivel_sugerido',
        'dias_semana',
        'ativo'
    ];
}
