<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BookType;

class Books extends Model
{
    use HasFactory;
    protected $fillable = [
        'book_code',
        'category_id',
        'name',
        'avatar',
        'quantity',
        'author',
    ];

    //Reletionship đến bảng bookType
    public function booktype(){
        return $this->belongsTo(BookType::class, 'category_id', 'id');
    }
    
}
