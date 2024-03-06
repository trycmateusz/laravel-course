<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class)
    ->name('get.home');


Route::get('/users', [UserController::class, 'list'])
    ->name('get.users');

Route::get('/users/{id}', [UserController::class, 'show'])
    ->name('get.user.details');

Route::get('/user/create', [UserController::class, 'create'])
    ->name('get.user.create');
