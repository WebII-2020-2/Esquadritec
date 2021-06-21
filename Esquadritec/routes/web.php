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
<<<<<<< HEAD
    Route::get('/dashboard/new', [User::class, 'create'])->name('user_create');
    Route::post('/dashboard/new/do', [User::class, 'store'])->name('user_create_do');
    Route::get('/dashboard/user/{id}', [User::class, 'show'])->name('user_show');

    Route::get('/dashboard/new_material', [Material::class, 'index'])->name('new_material');
    Route::post('/dashboard/new_material/do', [Material::class, 'storeMaterial'])->name('new_material_do');

    Route::get('/dashboard/new_cliente', [Cliente::class, 'create'])->name('new_cliente');
    Route::post('/dashboard/new_cliente/do', [Cliente::class, 'store'])->name('new_cliente_do');

    Route::get('/dashboard/modelo', [Modelo::class, 'index'])->name('listModelo');
=======
    Route::get('/dashboard/user/new', [User::class, 'create'])->name('user_create');
    Route::post('/dashboard/user/new/do', [User::class, 'store'])->name('user_create_do');
    Route::get('/dashboard/user/show/{id}', [User::class, 'show'])->name('user_show');

    Route::get('/dashboard/material/new', [Material::class, 'index'])->name('new_material');
    Route::post('/dashboard/material/new/do', [Material::class, 'create'])->name('new_material_do');

    Route::get('/dashboard/cliente', [Cliente::class, 'index'])->name('list_cliente');
    Route::get('/dashboard/cliente/new', [Cliente::class, 'create'])->name('new_cliente');
    Route::post('/dashboard/cliente/new/do', [Cliente::class, 'store'])->name('new_cliente_do');
    Route::get('/dashboard/cliente/edit/{id}', [Cliente::class, 'edit'])->name('edite_cliente');
    Route::post('/dashboard/cliente/edit/do', [Cliente::class, 'update'])->name('edite_cliente_do');
    Route::get('/dashboard/cliente/show/{id}', [Cliente::class, 'show'])->name('show_cliente');
    Route::get('/dashboard/cliente/delete/{id}', [Cliente::class, 'destroy'])->name('delete_cliente');

    Route::get('/dashboard/modelo', [Modelo::class, 'index'])->name('list_modelo');
>>>>>>> 7b35e975d2f179b9eeaa2f675eba2da205b09059
    Route::get('/dashboard/modelo/new', [Modelo::class, 'create'])->name('new_modelo');
    Route::post('/dashboard/modelo/new/do', [Modelo::class, 'store'])->name('new_modelo_do');
    Route::get('/dashboard/modelo/edit/{id}', [Modelo::class, 'edit'])->name('edite_modelo');
    Route::post('/dashboard/modelo/edit/do', [Modelo::class, 'update'])->name('edite_modelo_do');
    Route::get('/dashboard/modelo/show/{id}', [Modelo::class, 'show'])->name('show_modelo');
    Route::get('/dashboard/modelo/delete/{id}', [Modelo::class, 'destroy'])->name('delete_modelo');

    Route::get('/dashboard/linha', [Modelo::class, 'index'])->name('listModelo');
    Route::get('/dashboard/linha/new', [Modelo::class, 'create'])->name('new_modelo');
    Route::post('/dashboard/linha/new/do', [Modelo::class, 'store'])->name('new_modelo_do');
    Route::get('/dashboard/linha/edit/{id}', [Modelo::class, 'edit'])->name('edite_modelo');
    Route::get('/dashboard/linha/show/{id}', [Modelo::class, 'show'])->name('show_modelo');
    Route::post('/dashboard/linha/edit/do', [Modelo::class, 'update'])->name('edite_modelo_do');
    Route::get('/dashboard/linha/delete/{id}', [Modelo::class, 'destroy'])->name('delete_modelo');



    Route::get('/dashboard/3', function () {
        return view('produto/new_line');
    });

    Route::get('/dashboard/4', function () {
        return view('produto/new_produte');
    });

    Route::get('/dashboard/5', function () {
        return view('materiais/newMaterial');
    });

    Route::get('/dashboard/7', function () {
        return view('produto/list_line');
    });

    Route::get('/dashboard/8', function () {
        return view('materiais/list_material');
    });

    Route::get('/dashboard/9', function () {
        return view('funcionario/list_funcionarios');
    });

    Route::get('/dashboard/10', function () {
        return view('cliente/list_client');
    });

    Route::get('/dashboard/11', function () {
        return view('user/list_orcamento');
    });

    // POST
    Route::post('user_in', [User::class, 'store'])->name('user_store')->middleware('Validate');
});