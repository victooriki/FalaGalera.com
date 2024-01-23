<?php

namespace App\Models;

use App\Enums\ChamadosStats;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chamados extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descricao',
        'email',
        'stats',
        'created_at',
        'updated_at',
    ];

    public function stats(): Attribute
    {
        return Attribute::make(
            set: fn (ChamadosStats $stats) => $stats->name
        );
    }
}
