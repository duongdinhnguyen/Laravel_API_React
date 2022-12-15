<?php

namespace App\Http\Controllers\Arena;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login (Request $request)
    {
        if (auth()->attempt($request->only('email', 'password'))) {
            return redirect()->route('room.dashboard');
        }
        else return redirect()->route('dashboard');
    }
}
