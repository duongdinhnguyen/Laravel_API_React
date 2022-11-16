<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       DB::table('book_type')->insert(['category'=>'Truyện - Tiểu thuyết']);
       DB::table('book_type')->insert(['category'=>'Khoa học công nghệ - Kinh tế']);
       DB::table('book_type')->insert(['category'=>'Sách thiếu nhi']);
       DB::table('book_type')->insert(['category'=>'Chính trị - Pháp luật']);
       DB::table('book_type')->insert(['category'=>'Văn học nghệ thuật']);
       DB::table('book_type')->insert(['category'=>'Văn hóa xã hội - Lịch sử']);
       DB::table('book_type')->insert(['category'=>'Tâm lý, Tâm linh tôn giáo']);
       DB::table('book_type')->insert(['category'=>'Giáo trình']);
    }
}
