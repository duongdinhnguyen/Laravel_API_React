<?php

use App\Models\Room;
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
})->name('arena');
Route::get('score', function (Request $data) {

    $room = Room::where('user2', $data['user_id'])->first();
    $score = $room->score2 + 10;
    $room->score2 = $score;
    $room->save();
    // $score
    return response()->json($room);
});
