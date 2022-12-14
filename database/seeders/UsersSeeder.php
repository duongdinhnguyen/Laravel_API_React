<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')
            ->insert(['student_id' => '18001119', 'name' => 'Nguyễn Đình Đương', 'email' => 'nguyendinhduong_t63@hus.edu.vn', 'password' => Hash::make('12345678'), 'phone' => '0367778603', 'rule' => '1','google_id' => '118006738246523608801']);
    }
}
