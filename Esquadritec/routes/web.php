<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User\User;
use App\Http\Controllers\Auth\Login;

// Route::get('/', function () {
//     return view('welcome');
// });

// GET
Route::get('/', [Login::class, 'login'])->name('login');
Route::get('/logout', [Login::class, 'logout'])->name('logout');
Route::post('/login/do', [Login::class, 'loginDo'])->name('login/do');


Route::get('/dashboard', [User::class, 'index'])->name('dashboard')->middleware('Validate');
Route::get('/new', [User::class, 'create'])->name('user_create')->middleware('Validate');
Route::get('/{id}', [User::class, 'show'])->name('user_show')->middleware('Validate');


// POST
Route::post('user_in', [User::class, 'store'])->name('user_store')->middleware('Validate');