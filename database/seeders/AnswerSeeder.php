<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers')->insert(['question_id' => 1, 'name' => 'Câu trả lời 1', 'status' => true]);
        DB::table('answers')->insert(['question_id' => 1, 'name' => 'Câu trả lời 2', 'status' => false]);
        DB::table('answers')->insert(['question_id' => 1, 'name' => 'Câu trả lời 3', 'status' => false]);
        DB::table('answers')->insert(['question_id' => 1, 'name' => 'Câu trả lời 4', 'status' => false]);

        DB::table('answers')->insert(['question_id' => 2, 'name' => 'Câu trả lời 1', 'status' => true]);
        DB::table('answers')->insert(['question_id' => 2, 'name' => 'Câu trả lời 2', 'status' => false]);
        DB::table('answers')->insert(['question_id' => 2, 'name' => 'Câu trả lời 3', 'status' => false]);
        DB::table('answers')->insert(['question_id' => 2, 'name' => 'Câu trả lời 4', 'status' => false]);

        DB::table('answers')->insert(['question_id' => 3, 'name' => 'Câu trả lời 1', 'status' => true]);
        DB::table('answers')->insert(['question_id' => 3, 'name' => 'Câu trả lời 2', 'status' => false]);
        DB::table('answers')->insert(['question_id' => 3, 'name' => 'Câu trả lời 3', 'status' => false]);
        DB::table('answers')->insert(['question_id' => 3, 'name' => 'Câu trả lời 4', 'status' => false]);

        DB::table('answers')->insert(['question_id' => 4, 'name' => 'Câu trả lời 1', 'status' => true]);
        DB::table('answers')->insert(['question_id' => 4, 'name' => 'Câu trả lời 2', 'status' => false]);
        DB::table('answers')->insert(['question_id' => 4, 'name' => 'Câu trả lời 3', 'status' => false]);
        DB::table('answers')->insert(['question_id' => 4, 'name' => 'Câu trả lời 4', 'status' => false]);

        DB::table('answers')->insert(['question_id' => 5, 'name' => 'Câu trả lời 1', 'status' => true]);
        DB::table('answers')->insert(['question_id' => 5, 'name' => 'Câu trả lời 2', 'status' => false]);
        DB::table('answers')->insert(['question_id' => 5, 'name' => 'Câu trả lời 3', 'status' => false]);
        DB::table('answers')->insert(['question_id' => 5, 'name' => 'Câu trả lời 4', 'status' => false]);

        DB::table('answers')->insert(['question_id' => 6, 'name' => 'Câu trả lời 1', 'status' => true]);
        DB::table('answers')->insert(['question_id' => 6, 'name' => 'Câu trả lời 2', 'status' => false]);
        DB::table('answers')->insert(['question_id' => 6, 'name' => 'Câu trả lời 3', 'status' => false]);
        DB::table('answers')->insert(['question_id' => 6, 'name' => 'Câu trả lời 4', 'status' => false]);

        DB::table('answers')->insert(['question_id' => 7, 'name' => 'Câu trả lời 1', 'status' => true]);
        DB::table('answers')->insert(['question_id' => 7, 'name' => 'Câu trả lời 2', 'status' => false]);
        DB::table('answers')->insert(['question_id' => 7, 'name' => 'Câu trả lời 3', 'status' => false]);
        DB::table('answers')->insert(['question_id' => 7, 'name' => 'Câu trả lời 4', 'status' => false]);

        DB::table('answers')->insert(['question_id' => 8, 'name' => 'Câu trả lời 1', 'status' => true]);
        DB::table('answers')->insert(['question_id' => 8, 'name' => 'Câu trả lời 2', 'status' => false]);
        DB::table('answers')->insert(['question_id' => 8, 'name' => 'Câu trả lời 3', 'status' => false]);
        DB::table('answers')->insert(['question_id' => 8, 'name' => 'Câu trả lời 4', 'status' => false]);

        DB::table('answers')->insert(['question_id' => 9, 'name' => 'Câu trả lời 1', 'status' => true]);
        DB::table('answers')->insert(['question_id' => 9, 'name' => 'Câu trả lời 2', 'status' => false]);
        DB::table('answers')->insert(['question_id' => 9, 'name' => 'Câu trả lời 3', 'status' => false]);
        DB::table('answers')->insert(['question_id' => 9, 'name' => 'Câu trả lời 4', 'status' => false]);

        DB::table('answers')->insert(['question_id' => 10, 'name' => 'Câu trả lời 1', 'status' => false]);
        DB::table('answers')->insert(['question_id' => 10, 'name' => 'Câu trả lời 2', 'status' => true]);
        DB::table('answers')->insert(['question_id' => 10, 'name' => 'Câu trả lời 3', 'status' => false]);
        DB::table('answers')->insert(['question_id' => 10, 'name' => 'Câu trả lời 4', 'status' => false]);
    }
}
