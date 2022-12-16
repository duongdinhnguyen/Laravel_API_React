<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert(['name' => 'Câu hỏi 1']);
        DB::table('questions')->insert(['name' => 'Câu hỏi 2']);
        DB::table('questions')->insert(['name' => 'Câu hỏi 3']);
        DB::table('questions')->insert(['name' => 'Câu hỏi 4']);
        DB::table('questions')->insert(['name' => 'Câu hỏi 5']);
        DB::table('questions')->insert(['name' => 'Câu hỏi 6']);
        DB::table('questions')->insert(['name' => 'Câu hỏi 7']);
        DB::table('questions')->insert(['name' => 'Câu hỏi 8']);
        DB::table('questions')->insert(['name' => 'Câu hỏi 9']);
        DB::table('questions')->insert(['name' => 'Câu hỏi 10']);
    }
}
