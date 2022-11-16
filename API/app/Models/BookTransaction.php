<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Books;

class BookTransaction extends Model
{
    use HasFactory;
    protected $table = 'book_transactions';

    protected $fillable =[
        'book_id',
        'user_id',
        'borrowed_date',
        'return_plan_date',
        'return_actual_date',
        'quantity',
        'status',
        'transaction_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function book()
    {
        return $this->belongsTo(Books::class, 'book_id','id');
    }
    
}
