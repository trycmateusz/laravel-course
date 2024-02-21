<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\GameController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{name}', [HelloController::class, 'hello']);

Route::get('/users', [UserController::class, 'list'])
    ->name('get.users');

Route::get('/users/{id}', [UserController::class, 'show'])
    ->name('get.user.show');

Route::resource('/games', GameController::class)
    ->only([
        'index', 'show'
    ]);

Route::resource('/admin/games', GameController::class)
->only([
    'store', 'create', 'destroy'
]);