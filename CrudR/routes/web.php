<?php

use App\Http\controllers\RelationsControllrt;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/create',[UserController::class, 'create'])->name('create');

Route::post('/create/signup', [UserController::class, 'store'])->name('create.signup');

Route::get('/show', [UserController::class, 'show'])->name('show');

Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('delete');

Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');

Route::put('/update/{id}', [UserController::class, 'put'])->name('update');

Route::resource('relation',RelationsControllrt::class);
Route::resource('author', AuthorController::class);
