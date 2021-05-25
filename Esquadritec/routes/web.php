<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User\User;
use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\materiais\Material;
use App\Http\Controllers\cliente\new_cliente;
use App\Http\Controllers\modelo\formModelo;
// Route::get('/', function () {
//     return view('welcome');
// });

// GET
Route::get('/', [Login::class, 'login'])->name('login');
Route::get('/logout', [Login::class, 'logout'])->name('logout');
Route::post('/login/do', [Login::class, 'loginDo'])->name('login/do');


Route::get('/dashboard', [User::class, 'index'])->name('dashboard')->middleware('Validate');
Route::get('/dashboard/new', [User::class, 'create'])->name('user_create')->middleware('Validate');
Route::get('/dashboard/user/{id}', [User::class, 'show'])->name('user_show')->middleware('Validate');

Route::get('/dashboard/new_material', [Material::class, 'index'])->name('new_material')->middleware('Validate');
Route::post('/dashboard/new_material/new_material_do', [Material::class, 'create'])->name('new_material_do')->middleware('Validate');


Route::get('/test', function () {
    return view('cliente/new_cliente');
});

Route::get('/teste', function () {
    return view ('modelo/formModelo');
});

Route::get('/novo_produto', function () {
    return view ('auth/new_produte');
});

// POST
Route::post('user_in', [User::class, 'store'])->name('user_store')->middleware('Validate');