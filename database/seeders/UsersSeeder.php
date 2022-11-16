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
            ->insert(['student_id' => '18001200', 'name' => 'Nguyễn Thu Thảo', 'email' => 'nguyenthuthao_t63@hus.edu.vn', 'password' => Hash::make('12345678'), 'phone' => '0367778603', 'rule' => '1','google_id' => '106520950925893744265' ]);
        DB::table('users')
            ->insert(['student_id' => '18001119', 'name' => 'Nguyễn Đình Đương', 'email' => 'nguyendinhduong_t63@hus.edu.vn', 'password' => Hash::make('12345678'), 'phone' => '0367778603', 'rule' => '1','google_id' => '118006738246523608801']);
        DB::table('users')
            ->insert(['student_id' => '18001220', 'name' => 'Nguyễn Thành Vinh', 'email' => 'nguyenthanhvinh_t63@hus.edu.vn', 'password' => Hash::make('12345678'), 'phone' => '0367778603', 'rule' => '1' ,'google_id' => '116935558259104789277']);
        DB::table('users')
            ->insert(['student_id' => '18001111', 'name' => 'Đương', 'email' => 'nguyendinhduong.jvb@gmail.com', 'password' => Hash::make('12345678'), 'phone' => '0335483369', 'rule' => '0']);
        DB::table('users')
            ->insert(['student_id' => '18001001', 'name' => 'Vinh', 'email' => 'nguyenthanhvinh.jvb@gmail.com', 'password' => Hash::make('12345678'), 'phone' => '0367778603', 'rule' => '0']);
        DB::table('users')
            ->insert(['student_id' => '18001024', 'name' => 'Thảo', 'email' => 'nguyenthuthao.jvb@gmail.com', 'password' => Hash::make('12345678'), 'phone' => '0367778603', 'rule' => '0', 'active_flag'=> '0']);
    }
}
