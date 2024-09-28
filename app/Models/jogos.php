<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jogos extends Model
{
    use HasFactory;

    protected $primaryKey = 'idJogo';
    protected $fillable = [
        'nomeJogo',
        'empresaJogo',
        'plataformaJogo',
        'lancamentoJogo',
    ];
}
