<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('users')->group(function () {
	Route::get('/', [UserController::class, 'index'])->name('users.index');
    Route::get('/{id}', [UserController::class, 'show'])->name('users.index');
    Route::get('/{param}', [UserController::class, 'list'])->name('users.index');
    Route::post('/', [UserController::class, 'store'])->name('users.store');
    Route::put('/{id}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/{id}', [UserController::class, 'destroy'])->name('users.delete');

});