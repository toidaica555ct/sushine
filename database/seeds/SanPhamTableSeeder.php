<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SanPhamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker =Faker\Factory::create('vi_VN'); // cấu hình

       $now = new Carbon('2018-11-01','Asia/Ho_Chi_Minh');// định dạng giờ

       $list =[];
       for($i=1;$i<=100;$i++){
           $taomoi=$now->copy()->addSeconds($faker->numberBetween(1,259200));
           $capnhat=$taomoi->copy()->addSeconds($faker->numberBetween(300,172800));
           $giagoc=$faker->numberBetween(0,100000);
            $trangthai=$faker->numberBetween(1,2);
            $danhgia=$faker->numberBetween(1,5);
            $l_sp_ma=$faker->numberBetween(1,10);

           array_push($list,[
            'sp_ten'=>$faker->text(50),
            'sp_giaGoc'=>$giagoc,
            'sp_giaBan'=>$giagoc,
            'sp_hinh'=>$faker->text(50),
            'sp_thongTin'=>$faker->text(10),
            'sp_danhgia'=>$danhgia,
            'sp_taoMoi'=>$taomoi,
            'sp_capnhat'=>$capnhat,
            'sp_trangthai'=>$trangthai,
            'l_sp_ma'=>$l_sp_ma,
           ]);
       }
       DB::table('sanpham')->insert($list);
    }
}
