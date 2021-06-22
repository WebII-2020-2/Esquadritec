<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User\User;
use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Materiais\Material;
use App\Http\Controllers\Modelos\Modelo;
use App\Http\Controllers\Cliente\Cliente;
use App\Http\Controllers\Linha\Linha;
use App\Http\Controllers\Funcionario\Funcionario;
use App\Http\Controllers\produto\new_line;


Route::get('/', [Login::class, 'login'])->name('login');
Route::get('/logout', [Login::class, 'logout'])->name('logout');
Route::post('/login/do', [Login::class, 'loginDo'])->name('loginDo');

Route::middleware(['Validate'])->group(function () {
    Route::get('/dashboard', [User::class, 'index'])->name('dashboard');

    Route::get('/dashboard/new', [User::class, 'create'])->name('user_create');
    Route::post('/dashboard/new/do', [User::class, 'store'])->name('user_create_do');
    Route::get('/dashboard/user/{id}', [User::class, 'show'])->name('show_user');

    //Material
    Route::get('/dashboard/material/list', [materialController::class, 'index'])->name('list_material');
    Route::get('/dashboard/material/new', [materialController::class, 'create'])->name('new_material');
    Route::post('/dashboard/material/new/do',  [materialController::class, 'store'])->name('new_material_do');
    Route::get('/dashboard/material/edit/{id}', [materialController::class, 'edit'])->name('edite_material');
    Route::post('/dashboard/material/edit/do', [materialController::class, 'update'])->name('edite_material');
    Route::get('/dashboard/material/show/{id}', [materialController::class, 'show'])->name('show_material');
    Route::get('/dashboard/material/delete/{id}', [materialController::class, 'destroy'])->name('delete_material');


    Route::get('/dashboard/modelo', [Modelo::class, 'index'])->name('listModelo');

    //Modelo
    Route::get('/dashboard/modelo/new', [Modelo::class, 'create'])->name('new_modelo');
    Route::post('/dashboard/modelo/new/do', [Modelo::class, 'store'])->name('new_modelo_do');
    Route::get('/dashboard/modelo/edit/{id}', [Modelo::class, 'edit'])->name('edite_modelo');
    Route::post('/dashboard/modelo/edit/do', [Modelo::class, 'update'])->name('edite_modelo_do');
    Route::get('/dashboard/modelo/show/{id}', [Modelo::class, 'show'])->name('show_modelo');
    Route::get('/dashboard/modelo/delete/{id}', [Modelo::class, 'destroy'])->name('delete_modelo');

    //Linha
    Route::get('/dashboard/linha', [Modelo::class, 'index'])->name('listModelo');

    Route::get('/dashboard/cliente', [Cliente::class, 'index'])->name('list_cliente');
    Route::get('/dashboard/cliente/new', [Cliente::class, 'create'])->name('new_cliente');
    Route::post('/dashboard/cliente/new/do', [Cliente::class, 'store'])->name('new_cliente_do');
    Route::get('/dashboard/cliente/edit/{id}', [Cliente::class, 'edit'])->name('edite_cliente');
    Route::post('/dashboard/cliente/edit/do', [Cliente::class, 'update'])->name('edite_cliente_do');
    Route::get('/dashboard/cliente/show/{id}', [Cliente::class, 'show'])->name('show_cliente');
    Route::get('/dashboard/cliente/delete/{id}', [Cliente::class, 'destroy'])->name('delete_cliente');

    Route::get('/dashboard/modelo', [Modelo::class, 'index'])->name('listModelo');

    Route::get('/dashboard/linha', [Linha::class, 'index'])->name('list_linha');
    Route::get('/dashboard/linha/new', [Linha::class, 'create'])->name('new_linha');
    Route::post('/dashboard/linha/new/do', [Linha::class, 'store'])->name('new_linha_do');
    Route::get('/dashboard/linha/edit/{id}', [Linha::class, 'edit'])->name('edite_linha');
    Route::post('/dashboard/linha/edit/do', [Linha::class, 'update'])->name('edite_linha_do');
    Route::get('/dashboard/linha/show/{id}', [Linha::class, 'show'])->name('show_linha');
    Route::get('/dashboard/linha/delete/{id}', [Linha::class, 'destroy'])->name('delete_linha');

    Route::get('/dashboard/funcionario', [Funcionario::class, 'index'])->name('list_funcionario');
    Route::get('/dashboard/funcionario/new', [Funcionario::class, 'create'])->name('new_funcionario');
    Route::post('/dashboard/funcionario/new/do', [Funcionario::class, 'store'])->name('new_funcionario_do');
    Route::get('/dashboard/funcionario/edit/{id}', [Funcionario::class, 'edit'])->name('edite_funcionario');
    Route::post('/dashboard/funcionario/edit/do', [Funcionario::class, 'update'])->name('edite_funcionario_do');
    Route::get('/dashboard/funcionario/show/{id}', [Funcionario::class, 'show'])->name('show_funcionario');
    Route::get('/dashboard/funcionario/delete/{id}', [Funcionario::class, 'destroy'])->name('delete_funcionario');


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
        return view('orcamento/list_orcamento');
    });

    Route::get('/dashboard/12', function () {
        return view('orcamento/new_orcamento');
    });

    // POST
    Route::post('user_in', [User::class, 'store'])->name('user_store')->middleware('Validate');
});