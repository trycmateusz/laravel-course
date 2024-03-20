<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Game\GameBuilderController;
use App\Http\Controllers\Game\GameEloquentController;

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

//USERS
Route::get('/users', [UserController::class, 'list'])
    ->name('get.users');

Route::get('/users/{id}', [UserController::class, 'show'])
    ->name('get.user.details');

Route::get('/user/create', [UserController::class, 'create'])
    ->name('get.user.create');

//GAMES
Route::group([
    'prefix' => '/b/games',
    'as' => 'get.b.games.'
], function () {
    Route::get('/dashboard', [GameBuilderController::class, 'dashboard'])
        ->name('dashboard');

    Route::get('/', [GameBuilderController::class, 'index'])
        ->name('list');

    Route::get('/{id}', [GameBuilderController::class, 'show'])
        ->name('details');
});

Route::group([
    'prefix' => '/e/games',
    'as' => 'get.e.games.'
], function () {
    Route::get('/dashboard', [GameEloquentController::class, 'dashboard'])
        ->name('dashboard');

    Route::get('/', [GameEloquentController::class, 'index'])
        ->name('list');

    Route::get('/{id}', [GameEloquentController::class, 'show'])
        ->name('details');
});
