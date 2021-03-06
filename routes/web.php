<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User\User;
use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Materiais\Material;
use App\Http\Controllers\Modelos\Modelo;
use App\Http\Controllers\Cliente\Cliente;
use App\Http\Controllers\Linha\Linha;
use App\Http\Controllers\Funcionario\Funcionario;
use App\Http\Controllers\Orcamento\Orcamento;
use App\Http\Controllers\produto\new_line;
use App\Http\Controllers\Unidade\Unidade;


Route::get('/', [Login::class, 'login'])->name('login');
Route::get('/logout', [Login::class, 'logout'])->name('logout');
Route::post('/login/do', [Login::class, 'loginDo'])->name('loginDo');

// para adicionar um usuario sem estar logado use as rotas abaixo e retire o atributo:
// "<li><a class="dropdown-item" href="{{ route('show_user', ['id' => $user->id]) }}">Show user</a></li>" do layout

// Route::get('/dashboard/funcionario/new', [Funcionario::class, 'create'])->name('new_funcionario');
// Route::post('/dashboard/funcionario/new/do', [Funcionario::class, 'store'])->name('new_funcionario_do');

Route::middleware(['Validate'])->group(function () {
    Route::get('/dashboard', [User::class, 'index'])->name('dashboard');

    Route::get('/dashboard/funcionario', [Funcionario::class, 'index'])->name('list_funcionario');
    Route::get('/dashboard/funcionario/new', [Funcionario::class, 'create'])->name('new_funcionario');
    Route::post('/dashboard/funcionario/new/do', [Funcionario::class, 'store'])->name('new_funcionario_do');
    Route::get('/dashboard/funcionario/edit/{id}', [Funcionario::class, 'edit'])->name('edite_funcionario');
    Route::post('/dashboard/funcionario/edit/do', [Funcionario::class, 'update'])->name('edite_funcionario_do');
    Route::get('/dashboard/funcionario/show/{id}', [Funcionario::class, 'show'])->name('show_funcionario');
    Route::get('/dashboard/funcionario/delete/{id}', [Funcionario::class, 'destroy'])->name('delete_funcionario');

    Route::get('/dashboard/user/{id}', [User::class, 'show'])->name('show_user');

    //Material
    Route::get('/dashboard/material/list', [Material::class, 'index'])->name('list_material');
    Route::get('/dashboard/material/new', [Material::class, 'create'])->name('new_material');
    Route::post('/dashboard/material/new/do',  [Material::class, 'store'])->name('new_material_do');
    Route::get('/dashboard/material/show/{id}', [Material::class, 'show'])->name('show_material');
    Route::get('/dashboard/material/edit/{id}', [Material::class, 'edit'])->name('edite_material');
    Route::post('/dashboard/material/edit/do', [Material::class, 'update'])->name('edite_material_do');
    Route::get('/dashboard/material/delete/{id}', [Material::class, 'destroy'])->name('delete_material');

    Route::get('/dashboard/modelo', [Modelo::class, 'index'])->name('list_modelo');
    Route::get('/dashboard/modelo/new', [Modelo::class, 'create'])->name('new_modelo');
    Route::post('/dashboard/modelo/new/do', [Modelo::class, 'store'])->name('new_modelo_do');
    Route::get('/dashboard/modelo/edit/{id}', [Modelo::class, 'edit'])->name('edite_modelo');
    Route::post('/dashboard/modelo/edit/do', [Modelo::class, 'update'])->name('edite_modelo_do');
    Route::get('/dashboard/modelo/show/{id}', [Modelo::class, 'show'])->name('show_modelo');
    Route::get('/dashboard/modelo/delete/{id}', [Modelo::class, 'destroy'])->name('delete_modelo');

    Route::get('/dashboard/cliente', [Cliente::class, 'index'])->name('list_cliente');
    Route::get('/dashboard/cliente/new', [Cliente::class, 'create'])->name('new_cliente');
    Route::post('/dashboard/cliente/new/do', [Cliente::class, 'store'])->name('new_cliente_do');
    Route::get('/dashboard/cliente/edit/{id}', [Cliente::class, 'edit'])->name('edite_cliente');
    Route::post('/dashboard/cliente/edit/do', [Cliente::class, 'update'])->name('edite_cliente_do');
    Route::get('/dashboard/cliente/show/{id}', [Cliente::class, 'show'])->name('show_cliente');
    Route::get('/dashboard/cliente/delete/{id}', [Cliente::class, 'destroy'])->name('delete_cliente');

    Route::get('/dashboard/linha', [Linha::class, 'index'])->name('list_linha');
    Route::get('/dashboard/linha/new', [Linha::class, 'create'])->name('new_linha');
    Route::post('/dashboard/linha/new/do', [Linha::class, 'store'])->name('new_linha_do');
    Route::get('/dashboard/linha/edit/{id}', [Linha::class, 'edit'])->name('edite_linha');
    Route::post('/dashboard/linha/edit/do', [Linha::class, 'update'])->name('edite_linha_do');
    Route::get('/dashboard/linha/show/{id}', [Linha::class, 'show'])->name('show_linha');
    Route::get('/dashboard/linha/delete/{id}', [Linha::class, 'destroy'])->name('delete_linha');

    Route::get('/dashboard/unidade', [Unidade::class, 'index'])->name('list_unidade');
    Route::get('/dashboard/unidade/new', [Unidade::class, 'create'])->name('new_unidade');
    Route::post('/dashboard/unidade/new/do', [Unidade::class, 'store'])->name('new_unidade_do');
    Route::get('/dashboard/unidade/edit/{id}', [Unidade::class, 'edit'])->name('edite_unidade');
    Route::post('/dashboard/unidade/edit/do', [Unidade::class, 'update'])->name('edite_unidade_do');
    Route::get('/dashboard/unidade/show/{id}', [Unidade::class, 'show'])->name('show_unidade');
    Route::get('/dashboard/unidade/delete/{id}', [Unidade::class, 'destroy'])->name('delete_unidade');

    Route::get('/dashboard/orcamento', [Orcamento::class, 'index'])->name('list_orcamento');
    Route::get('/dashboard/orcamento/new', [Orcamento::class, 'create'])->name('new_orcamento');
    Route::get('/dashboard/orcamento/new/produto', [Orcamento::class, 'orcamento_p'])->name('orcamento_p');
    Route::get('/dashboard/orcamento/new/produto/rem/{id}', [Orcamento::class, 'orcamento_p_rem'])->name('orcamento_p_rem');
    Route::get('/dashboard/orcamento/new/produto/add', [Orcamento::class, 'orcamento_p_add'])->name('orcamento_p_add');
    Route::get('/dashboard/orcamento/new/material', [Orcamento::class, 'orcamento_material'])->name('orcamento_material');
    Route::post('/dashboard/orcamento/new/material/add', [Orcamento::class, 'orcamento_material_add'])->name('orcamento_material_add');
    Route::get('/dashboard/orcamento/new/material/rem/{id}', [Orcamento::class, 'orcamento_material_rem'])->name('orcamento_material_rem');
    Route::post('/dashboard/orcamento/new/produto/set', [Orcamento::class, 'orcamento_p_set'])->name('orcamento_p_set');
    Route::post('/dashboard/orcamento/new/set', [Orcamento::class, 'orcamento_set'])->name('orcamento_set');
    Route::get('/dashboard/orcamento/new/next', [Orcamento::class, 'orcamento_next'])->name('orcamento_next');
    Route::post('/dashboard/orcamento/new/do', [Orcamento::class, 'store'])->name('new_orcamento_do');
    Route::get('/dashboard/orcamento/edit/{id}', [Orcamento::class, 'edit'])->name('edite_orcamento');
    Route::post('/dashboard/orcamento/edit/do', [Orcamento::class, 'update'])->name('edite_orcamento_do');
    Route::get('/dashboard/orcamento/show/{id}', [Orcamento::class, 'show'])->name('show_orcamento');
    Route::get('/dashboard/orcamento/delete/{id}', [Orcamento::class, 'destroy'])->name('delete_orcamento');


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

    // POST
    Route::post('user_in', [User::class, 'store'])->name('user_store')->middleware('Validate');
});