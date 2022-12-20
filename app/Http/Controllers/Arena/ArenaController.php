<?php

namespace App\Http\Controllers\Arena;

use App\Constants\RoomConstant;
use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Arena;
use App\Models\Question;
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
        $question = Question::inRandomOrder()->limit(1)->first(); // Random 1 câu hỏi bất kỳ

        $room = Room::find($id);
        $room->start = RoomConstant::START;// chuyển trạng thái từ default->start
        $room->save();
        $user_1 = Arena::where('room_id', $room->id)
            ->where('user_id', auth()->user()->id)
            ->first();
        $user_2 = Arena::where('room_id', $room->id)
            ->where('user_id', '<>', auth()->user()->id)
            ->first();

        return view('arena.arena', compact('room', 'question', 'user_1', 'user_2'));
    }

    public function room ($id)
    {
        $room = Room::find($id);
        if ($room->arenas->count() < RoomConstant::COUNT_USER) {
            $arena = Arena::create([
                'room_id' => $room->id,
                'user_id' => auth()->user()->id
            ]);
        }

        $user_2 = Arena::where('room_id', $room->id)
            ->where('user_id', '<>', auth()->user()->id)
            ->first();

        return view('arena.waitingroom', compact('room', 'user_2'));
    }

    public function checkStart(Request $data)
    {
        $reponse = [];
        $room = Room::find($data['room_id']);
        $user_2 = Arena::where('room_id', $room->id)
            ->where('user_id', '<>', auth()->user()->id)
            ->first();
        if (!empty($user_2)) {
            $reponse['user_name'] = $user_2->user->name;
        }
        $reponse['status'] = $room->start;
        return response()->json($reponse);
    }

    public function createRoom ()
    {
        $room = Room::create([
            'start' => RoomConstant::DEFAULT
        ]);
        return redirect()->route('room.room', ['id' => $room->id]);
    }

    public function destroyRoom ()
    {
        Room::truncate();
        return redirect()->route('room.dashboard');
    }

    public function score (Request $data)
    {
        $reponse = [];
        $room_id = $data['room_id'];
        $user_2 = Arena::where('room_id', $room_id)
            ->where('user_id', '<>', auth()->user()->id)
            ->first();

        $reponse['score'] = $user_2->score ?? null;
        $reponse['user_2'] = !empty($user_2) ? $user_2 : null;
        $reponse['href'] = route('room.dashboard');

        return response()->json($reponse);
    }

    public function updateQuestionAndScore (Request $data)
    {
        $answer = Answer::find($data['answer_id']);
        $room_id = $data['room_id'];

        $authArena = Arena::where('room_id', $room_id)
            ->where('user_id', auth()->user()->id)
            ->first();
        $score = $authArena->score;
        if ($answer->status) {
            $score += 10;
            $authArena->score = $score;
            $authArena->save();
        }

        $question = Question::inRandomOrder()->limit(1)->first(); // Random 1 câu hỏi bất kỳ
        $answers = $question->answers;
        $reponse = [
            'score' => $score,
            'question' => $question->name,
            'answers' => $answers,
            'status' => $answer->status
        ];
        return response()->json($reponse);
    }

    public function exitRoom (Request $data)
    {
        $reponse = [];
        $room_id = $data['room_id'];
        $authArena = Arena::where('room_id', $room_id)
            ->where('user_id', auth()->user()->id)
            ->first();
        $authArena->delete();
        $reponse['href'] = route('room.dashboard');
        return response()->json($reponse);
    }
}
