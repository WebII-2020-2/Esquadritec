<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;

    protected $table = 'cliente';

    protected $fillable = [
        'name',
        'cpf',
        'cnpj',
        'email',
    ];


    public function endereco()
    {
        $endereco = $this->hasOne(endereco::class, 'cliente', 'id');
        return $endereco;
    }
}
