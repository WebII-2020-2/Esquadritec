<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $table = 'produto';

    protected $fillable = [
        'orcamento',
        'modelo',
        'linha',
        'nome',
        'valor'
    ];
    public function materiais()
    {
        $produto = $this->hasMany(materialProduto::class, 'produto');
        $produto[0]['modelo'] = $this->hasOne(Modelo::class, 'id', 'modelo');
        return $produto;
    }
}
