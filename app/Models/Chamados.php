<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chamados extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descricao',
        'email',
        'data_fechamento',
        'data_conclusao',
        'avaliacao',
        'feedback_avaliacao',
        'stats',
        'created_at',
        'updated_at',
    ];
}
