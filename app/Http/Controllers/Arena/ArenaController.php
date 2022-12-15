<?php

namespace App\Http\Controllers\Arena;

use App\Constants\RoomConstant;
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
        $room->start = RoomConstant::START;
        $room->save();
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

    public function checkStart(Request $data)
    {
        $room = Room::find($data['room_id']);
        $reponse = [];
        if (auth()->user()->id == $room->user1) {
            $reponse['user_name'] = $room->user_2->name;
        }
        else $reponse['user_name'] = $room->user_1->name;
        $reponse['status'] = $room->start;
        return response()->json($reponse);
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
        if (auth()->user()->id == $room->user1) {
            // cập nhật điểm thằng thứ 2
            $score = $room->score2 + 10;
            $room->score2 = $score;
        }
        else {
            // cập nhật điểm thằng thứ nhất
            $score = $room->score1 + 10;
            $room->score1 = $score;
        }
        $room->save();
        // $score
        return response()->json($score);
    }
}
