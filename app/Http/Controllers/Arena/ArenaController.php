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
        return view('arena.room', compact('rooms'));
    }

    public function index ($id)
    {
        $room = Room::find($id);
        return view('arena.arena', compact('room'));
    }

    public function room ($id)
    {
        $room = Room::find($id);
        if (empty($room->user2) && $room->user1 != auth()->user()->id) {
            $room->user2 = auth()->user()->id;
            $room->score2 = 0;
            $room->save();
        }
        return view('arena.waitingroom', compact('room'));
    }

    public function createRoom ()
    {
        $room = Room::create([
            'user1' => auth()->user()->id,
            'score1' => 0
        ]);
        return redirect()->route('room.index', ['id' => $room->id]);
    }

    public function destroyRoom ()
    {
        Room::truncate();
        return redirect()->route('room.dashboard');
    }

    public function score (Request $data)
    {
        $room = Room::find($data['room_id']);
        $score = $room->score2 + 10;
        $room->score2 = $score;
        $room->save();
        // $score
        return response()->json($room);
    }
}
