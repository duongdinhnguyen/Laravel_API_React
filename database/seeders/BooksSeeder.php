<?php

namespace Database\Seeders;

use App\Models\Books;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert(['book_code'=>'Book1','category_id'=>'1','name'=>'Tắt đèn','avatar'=>'img843_7.jpg','author'=>'Ngô Tất Tố','quantity'=>'300']);
        DB::table('books')->insert(['book_code'=>'Book2','category_id'=>'2','name'=>'Chính Xác - Nguyên Lý, Thực Thi Và Giải Pháp Cho Internet Vạn Vật','avatar'=>'tải xuống.jfif','author'=>'Timothy Chou','quantity'=>'100']);
        DB::table('books')->insert(['book_code'=>'Book3','category_id'=>'3','name'=>'Những tấm lòng cao cả','author'=>'Edmondo De Amicis','avatar'=>'6d02685a15ed9676a58e2e2aa3db4e35.jfif','quantity'=>'20']);
        DB::table('books')->insert(['book_code'=>'Book4','category_id'=>'4','name'=>'Bộ luật tố tụng Dân sự','author'=>'Quốc Hội','avatar'=>'images.jfif','quantity'=>'40']);
        DB::table('books')->insert(['book_code'=>'Book5','category_id'=>'5','name'=>'Chí Phèo','author'=>'Nam Cao','avatar'=>'img914_8.jpg','quantity'=>'30']);
        DB::table('books')->insert(['book_code'=>'Book6','category_id'=>'6','name'=>'Văn hóa Nguyên thủy','author'=>'Edward Bernett Tylor','avatar'=>'fe20485a60d3014b17ad3f6e4bc079b8.jpg','quantity'=>'50']);
        DB::table('books')->insert(['book_code'=>'Book7','category_id'=>'7','name'=>'Phi lý trí','author'=>'Dan Ariely','avatar'=>'predictably-irrational-phi-ly-tri-outline-12-3.webp','quantity'=>'15']);
        DB::table('books')->insert(['book_code'=>'Book8','category_id'=>'8','name'=>'Giáo trình Triết học Mác-Lênin','author'=>'Bộ Giáo dục và Đào tạo','avatar'=>'nhasachmienphi-giao-trinh-triet-hoc-mac-lenin.jpg','quantity'=>'50']);
        DB::table('books')->insert(['book_code'=>'Book9','category_id'=>'8','name'=>'Giáo trình Toán cao cấp','author'=>'Bộ Giáo dục và Đào tạo','avatar'=>'toancaocap.jpg','quantity'=>'50']);
        DB::table('books')->insert(['book_code'=>'Book10','category_id'=>'8','name'=>'Nhiệt động học và vật lí phân tử','author'=>'Bộ Giáo dục và Đào tạo','avatar'=>'nhietdonghocvavatliphantu.jpg','quantity'=>'50']);
        DB::table('books')->insert(['book_code'=>'Book11','category_id'=>'8','name'=>'Giải tích số','author'=>'Bộ Giáo dục và Đào tạo','avatar'=>'giaitichso.jpg','quantity'=>'50']);
        DB::table('books')->insert(['book_code'=>'Book12','category_id'=>'8','name'=>'Toán rời rạc','author'=>'Nhà xuất bản Đại học quốc gia thành phố Hồ Chí Minh','avatar'=>'toanroirac.jpg','quantity'=>'50']);
        DB::table('books')->insert(['book_code'=>'Book13','category_id'=>'2','name'=>'Đắc nhân tâm','author'=>'Nhà xuất bản Đại học quốc gia thành phố Hồ Chí Minh','avatar'=>'dacnhantam.jpg','quantity'=>'50']);
        DB::table('books')->insert(['book_code'=>'Book14','category_id'=>'8','name'=>'Kiến trúc máy tính','author'=>'Nhà xuất bản Đại học quốc gia thành phố Hồ Chí Minh','avatar'=>'ktmt.png','quantity'=>'50']);
        DB::table('books')->insert(['book_code'=>'Book15','category_id'=>'8','name'=>'Mạng máy tính','author'=>'Nhà xuất bản Đại học quốc gia thành phố Hồ Chí Minh','avatar'=>'mmt.png','quantity'=>'50']);
        DB::table('books')->insert(['book_code'=>'Book16','category_id'=>'8','name'=>'Đại số tuyến tính','author'=>'Nhà xuất bản Đại học quốc gia thành phố Hồ Chí Minh','avatar'=>'dstt.jpg','quantity'=>'50']);
        DB::table('books')->insert(['book_code'=>'Book17','category_id'=>'8','name'=>'Nhập môn trí tuệ nhân tạo','author'=>'Nhà xuất bản Đại học quốc gia thành phố Hồ Chí Minh','avatar'=>'ttnt.jpg','quantity'=>'50']);
        DB::table('books')->insert(['book_code'=>'Book18','category_id'=>'8','name'=>'Khoa học trái đất','author'=>'Nhà xuất bản Đại học quốc gia thành phố Hồ Chí Minh','avatar'=>'khtd.jpg','quantity'=>'50']);
        Books::factory(10)->create();
    }
}
