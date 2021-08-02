<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;
    protected $table = 'materiais';

    protected $fillable = [
        'nome',
        'valor',
        'linha',
        'peso',
        'unidade_medida',
        'codigo',
    ];

    public function unidadeMedida()
    {
        return $this->hasOne(Unidade::class, 'unidade_medida', 'id');
    }
}