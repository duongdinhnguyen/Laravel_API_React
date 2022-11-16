<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert(['student_id'=>'18001200','email'=>'nguyenthuthao_t63@hus.edu.vn']);
        DB::table('students')->insert(['student_id'=>'18001119','email'=>'nguyendinhduong_t63@hus.edu.vn']);
        DB::table('students')->insert(['student_id'=>'18001220','email'=>'nguyenthanhvinh_t63@hus.edu.vn']);
        DB::table('students')->insert(['student_id'=>'18001234','email'=>'nguyenthuthao2905@gmail.com']);
        DB::table('students')->insert(['student_id'=>'18001024','email'=>'nguyenthuthao.jvb@gmail.com']);
        DB::table('students')->insert(['student_id'=>'18001111','email'=>'nguyendinhduong.jvb@gmail.com']);
        DB::table('students')->insert(['student_id'=>'18001001','email'=>'nguyenthanhvinh.jvb@gmail.com']);
        DB::table('students')->insert(['student_id'=>'18001999','email'=>'dinhduongco1308@gmail.com']);
        Student::factory(10)->create();
    }
}
