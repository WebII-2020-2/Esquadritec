<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User\User;
use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\materiais\Material;
use App\Http\Controllers\cliente\new_cliente;
use App\Http\Controllers\modelo\formModelo;
use App\Http\Controllers\produto\new_line;
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


Route::get('/1', function () {
    return view('cliente/new_cliente');
});

Route::get('/2', function () {
    return view('modelo/formModelo');
});


Route::get('/3', function () {
    return view ('produto/new_line');
});

Route::get('/4', function () {
    return view ('auth/new_produte');
});

// POST
Route::post('user_in', [User::class, 'store'])->name('user_store')->middleware('Validate');