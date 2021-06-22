<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Linha extends Model
{
    protected $table = "linha";
    protected $fillable = [
        'linha',
    ];
    use HasFactory;
}
