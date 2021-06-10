<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    use HasFactory;
    protected $table = 'telefone';

    protected $fillable = [
        'numero',
        'cliente',
    ];
}
