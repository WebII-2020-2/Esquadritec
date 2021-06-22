<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Funcionario extends Model
{
    protected $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'admin',
        'password',
    ];
    use HasFactory;

    public function setPasswordAttribute($value){
        $this->attributes['password'] = Hash::make($value);
    }
}
