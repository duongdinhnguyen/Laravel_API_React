<?php

namespace App\Http\Controllers\Arena;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;


class ArenaController extends Controller
{

    public function dashboard ()
    {
        $rooms = Room::all();
        return view('welcome', compact('rooms'));
    }

    public function index ()
    {
        return view('arena.arena');
    }

    public function room ($id)
    {
        dd($id);
    }

    public function createRoom ()
    {
        Room::create([
            'user1' => 1
        ]);
        return redirect()->route('dashboard');
    }

    public function destroyRoom ()
    {
        Room::truncate();
        return redirect()->route('dashboard');
    }

    public function score (Request $data)
    {
        $room = Room::where('user2', $data['user_id'])->first();
        $score = $room->score2 + 10;
        $room->score2 = $score;
        $room->save();
        // $score
        return response()->json($room);
    }
}
