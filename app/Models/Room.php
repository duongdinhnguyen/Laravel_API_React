<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $table = 'rooms';

    protected $fillable =[
        'score1',
        'score2',
        'user1',
        'user2',
    ];

    public function user_1()
    {
        return $this->hasOne('App\Models\User', 'id', 'user1')->withDefault();
    }

    public function user_2()
    {
        return $this->hasOne('App\Models\User', 'id', 'user2')->withDefault();
    }
}
