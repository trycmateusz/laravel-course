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
Route::get('/users/test/{id}', [UserController::class, 'testShow'])
    ->name('get.users.test');
Route::post('/users/test/{id}', [UserController::class, 'testStore'])
    ->name('get.users.test');
Route::put('/users/test/{id}', [UserController::class, 'testPut'])
    ->name('put.users.test');
Route::delete('/users/test/{id}', [UserController::class, 'testDelete'])
    ->name('delete.users.test');

Route::resource('/games', GameController::class);
