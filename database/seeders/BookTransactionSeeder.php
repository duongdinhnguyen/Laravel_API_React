<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BookTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_transactions')->insert(['transaction_id'=>'Transaction1','book_id'=>'1','user_id'=>'4','quantity'=>'1', 'status' =>'0']);
        DB::table('book_transactions')->insert(['transaction_id'=>'Transaction1','book_id'=>'3','user_id'=>'4','quantity'=>'1', 'status' =>'0']);
        DB::table('book_transactions')->insert(['transaction_id'=>'Transaction2','book_id'=>'5','user_id'=>'5','quantity'=>'1', 'status' =>'0']);
        DB::table('book_transactions')->insert(['transaction_id'=>'Transaction2','book_id'=>'6','user_id'=>'5','quantity'=>'1', 'status' =>'0']);
        DB::table('book_transactions')->insert(['transaction_id'=>'Transaction3','book_id'=>'5','user_id'=>'4','quantity'=>'1', 'status' =>'3']);
        DB::table('book_transactions')->insert(['transaction_id'=>'Transaction3','book_id'=>'7','user_id'=>'4','quantity'=>'1', 'status' =>'3']);
        DB::table('book_transactions')->insert(['transaction_id'=>'Transaction3','book_id'=>'4','user_id'=>'4','quantity'=>'1', 'status' =>'3']);
        DB::table('book_transactions')->insert(['transaction_id'=>'Transaction4','book_id'=>'9','user_id'=>'4','borrowed_date'=>date('2022-01-01 00:00:00'),'return_plan_date'=>Carbon::now()->addDays(5),'quantity'=>'1', 'status' =>'1']);
        DB::table('book_transactions')->insert(['transaction_id'=>'Transaction4','book_id'=>'10','user_id'=>'4','borrowed_date'=>date('2022-01-01 00:00:00'),'return_plan_date'=>Carbon::now()->addDays(5),'quantity'=>'1', 'status' =>'1']);
        DB::table('book_transactions')->insert(['transaction_id'=>'Transaction4','book_id'=>'11','user_id'=>'4','borrowed_date'=>date('2022-01-01 00:00:00'),'return_plan_date'=>Carbon::now()->addDays(5),'quantity'=>'1', 'status' =>'1']);
        DB::table('book_transactions')->insert(['transaction_id'=>'Transaction5','book_id'=>'6','user_id'=>'4','borrowed_date'=>date('2021-10-01 00:00:00'),'return_plan_date'=>date('2022-04-25 00:00:00'),'quantity'=>'1', 'status' =>'3']);
        DB::table('book_transactions')->insert(['transaction_id'=>'Transaction5','book_id'=>'12','user_id'=>'4','borrowed_date'=>date('2021-10-01 00:00:00'),'return_plan_date'=>date('2022-04-25 00:00:00'),'quantity'=>'1', 'status' =>'3']);
        DB::table('book_transactions')->insert(['transaction_id'=>'Transaction6','book_id'=>'13','user_id'=>'4','borrowed_date'=>date('2022-03-03 00:00:00'),'return_plan_date'=>date('2022-04-26 00:00:00'),'quantity'=>'1', 'status' =>'1']);
        DB::table('book_transactions')->insert(['transaction_id'=>'Transaction7','book_id'=>'14','user_id'=>'4','borrowed_date'=>date('2022-10-04 00:00:00'),'return_plan_date'=>date('2022-04-27 00:00:00'),'quantity'=>'1', 'status' =>'1']);
        DB::table('book_transactions')->insert(['transaction_id'=>'Transaction8','book_id'=>'15','user_id'=>'4','borrowed_date'=>date('2022-10-04 00:00:00'),'return_plan_date'=>date('2022-04-24 00:00:00'),'quantity'=>'1', 'status' =>'1']);
        DB::table('book_transactions')->insert(['transaction_id'=>'Transaction9','book_id'=>'15','user_id'=>'4','borrowed_date'=>date('2022-04-05 00:00:00'),'return_plan_date'=>date('2022-10-01 00:00:00'),'return_actual_date'=>date('2022-04-06 00:00:00'),'quantity'=>'1', 'status' =>'4']);
        DB::table('book_transactions')->insert(['transaction_id'=>'Transaction9','book_id'=>'16','user_id'=>'4','borrowed_date'=>date('2022-04-05 00:00:00'),'return_plan_date'=>date('2022-10-01 00:00:00'),'return_actual_date'=>date('2022-04-06 00:00:00'),'quantity'=>'1', 'status' =>'4']);
        DB::table('book_transactions')->insert(['transaction_id'=>'Transaction10','book_id'=>'17','user_id'=>'4','borrowed_date'=>date('2022-04-05 00:00:00'),'return_plan_date'=>date('2022-10-01 00:00:00'),'return_actual_date'=>date('2022-05-06 00:00:00'),'quantity'=>'1', 'status' =>'4']);
        DB::table('book_transactions')->insert(['transaction_id'=>'Transaction16','book_id'=>'18','user_id'=>'4','borrowed_date'=>date('2022-04-05 00:00:00'),'return_plan_date'=>date('2022-10-01 00:00:00'),'return_actual_date'=>date('2022-06-06 00:00:00'),'quantity'=>'1', 'status' =>'4']);
        DB::table('book_transactions')->insert(['transaction_id'=>'Transaction15','book_id'=>'19','user_id'=>'4','borrowed_date'=>date('2022-04-05 00:00:00'),'return_plan_date'=>date('2022-10-01 00:00:00'),'return_actual_date'=>date('2022-06-06 00:00:00'),'quantity'=>'1', 'status' =>'4']);
        DB::table('book_transactions')->insert(['transaction_id'=>'Transaction11','book_id'=>'20','user_id'=>'4','borrowed_date'=>date('2022-04-05 00:00:00'),'return_plan_date'=>date('2022-10-01 00:00:00'),'return_actual_date'=>date('2022-06-06 00:00:00'),'quantity'=>'1', 'status' =>'4']);
        DB::table('book_transactions')->insert(['transaction_id'=>'Transaction12','book_id'=>'21','user_id'=>'4','borrowed_date'=>date('2022-04-05 00:00:00'),'return_plan_date'=>date('2022-10-01 00:00:00'),'return_actual_date'=>date('2022-07-06 00:00:00'),'quantity'=>'1', 'status' =>'4']);
        DB::table('book_transactions')->insert(['transaction_id'=>'Transaction12','book_id'=>'22','user_id'=>'4','borrowed_date'=>date('2022-04-05 00:00:00'),'return_plan_date'=>date('2022-10-01 00:00:00'),'return_actual_date'=>date('2022-07-06 00:00:00'),'quantity'=>'1', 'status' =>'4']);
        DB::table('book_transactions')->insert(['transaction_id'=>'Transaction13','book_id'=>'23','user_id'=>'4','borrowed_date'=>date('2022-04-05 00:00:00'),'return_plan_date'=>date('2022-10-01 00:00:00'),'return_actual_date'=>date('2022-08-06 00:00:00'),'quantity'=>'1', 'status' =>'4']);
        DB::table('book_transactions')->insert(['transaction_id'=>'Transaction14','book_id'=>'24','user_id'=>'4','borrowed_date'=>date('2022-04-05 00:00:00'),'return_plan_date'=>date('2022-10-01 00:00:00'),'return_actual_date'=>date('2022-09-06 00:00:00'),'quantity'=>'1', 'status' =>'4']);
        
    }
}
