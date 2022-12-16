<?php

use App\Http\Controllers\Arena\ArenaController;
use App\Http\Controllers\Arena\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
})->name('dashboard');
Route::post('/', [LoginController::class, 'login'])->name('login');
Route::get('/rooms', [ArenaController::class, 'dashboard'])->name('room.dashboard');
Route::get('createRoom', [ArenaController::class, 'createRoom'])->name('room.create');
Route::get('destroyRoom', [ArenaController::class, 'destroyRoom'])->name('room.destroy');
Route::get('room/{id}', [ArenaController::class, 'room'])->name('room.index');
Route::get('checkStart', [ArenaController::class, 'checkStart'])->name('room.checkStart');
Route::get('/arena/{id}', [ArenaController::class, 'index'])->name('arena');
Route::get('score', [ArenaController::class, 'score'])->name('room.score');
Route::post('updateQuestionAndScore', [ArenaController::class, 'updateQuestionAndScore'])->name('room.updateQuestionAndScore');
