<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\User;

// Route::get('/', function () {
//     return view('welcome');
// });

// GET
Route::get('/', [User::class, 'create'])->name('user_create');
Route::get('/{id}', [User::class, 'show'])->name('user_show');


// POST
Route::post('user_in', [User::class, 'store'])->name('user_store');