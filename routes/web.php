<?php

use App\Http\Controllers\Arena\ArenaController;
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

Route::get('/', [ArenaController::class, 'dashboard'])->name('dashboard');
Route::get('createRoom', [ArenaController::class, 'createRoom'])->name('room.create');
Route::get('destroyRoom', [ArenaController::class, 'destroyRoom'])->name('room.destroy');
Route::get('room/{id}', [ArenaController::class, 'room'])->name('room.index');
Route::get('/arena', [ArenaController::class, 'index'])->name('arena');
Route::get('score', [ArenaController::class, 'score']);
