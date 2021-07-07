<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    protected $table = 'orcamento';

    protected $fillable = [
        'cliente',
        'observacao',
        'desconto',
        'status',
        'valor_t_b',
        'valor_f'
    ];
    use HasFactory;
}
