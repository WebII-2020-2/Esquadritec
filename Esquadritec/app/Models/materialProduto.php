<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class materialProduto extends Model
{
    use HasFactory;

    protected $table = 'material_produto';

    protected $fillable = [
        'produto',
        'material',
        'valor',
        'quantidade'
    ];
}
