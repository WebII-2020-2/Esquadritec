<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User\User;
use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Materiais\Material;
use App\Http\Controllers\Modelos\Modelo;
use App\Http\Controllers\Cliente\Cliente;
use App\Http\Controllers\modelo\formModelo;
use App\Http\Controllers\produto\new_line;


Route::get('/', [Login::class, 'login'])->name('login');
Route::get('/logout', [Login::class, 'logout'])->name('logout');
Route::post('/login/do', [Login::class, 'loginDo'])->name('loginDo');

Route::middleware(['Validate'])->group(function () {
    Route::get('/dashboard', [User::class, 'index'])->name('dashboard');
    Route::get('/dashboard/new', [User::class, 'create'])->name('user_create');
    Route::post('/dashboard/new/do', [User::class, 'store'])->name('user_create_do');
    Route::get('/dashboard/user/{id}', [User::class, 'show'])->name('user_show');

    Route::get('/dashboard/new_material', [Material::class, 'index'])->name('new_material');
    Route::post('/dashboard/new_material/do', [Material::class, 'create'])->name('new_material_do');

    Route::get('/dashboard/new_cliente', [Cliente::class, 'create'])->name('new_cliente');
    Route::post('/dashboard/new_cliente/do', [Cliente::class, 'store'])->name('new_cliente_do');

    Route::get('/dashboard/newModelo', [Modelo::class, 'create'])->name('new_modelo');
    Route::post('/dashboard/newModelo/do', [Modelo::class, 'store'])->name('new_modelo_do');
    Route::get('/dashboard/listModelo', [Modelo::class, 'index'])->name('list_modelo');
    Route::get('/dashboard/editModelo/{id}', [Modelo::class, 'edit'])->name('edite_modelo');


    Route::get('/dashboard/newModelo/list', function () {
        return view('modelo/list_model');
    });


    Route::get('/3', function () {
        return view('produto/new_line');
    });

    Route::get('/4', function () {
        return view('produto/new_produte');
    });

    Route::get('/5', function () {
        return view('materiais/newMaterial');
    });

    Route::get('/7', function () {
        return view('produto/list_line');
    });

    Route::get('/8', function () {
        return view('materiais/list_material');
    });

    Route::get('/9', function () {
        return view('user/list_worker');
    });

    Route::get('/10', function () {
        return view('cliente/list_client');
    });

    Route::get('/11', function () {
        return view('user/list_orcamento');
    });

    // POST
    Route::post('user_in', [User::class, 'store'])->name('user_store')->middleware('Validate');
});
