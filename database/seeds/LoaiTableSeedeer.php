<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class LoaiTableSeedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list=[];

        $types=["Hoa lẻ","Phụ kiện","Phụ liệu","Bó hoa","Giỏ hoa","Hoa hộp giấy","Kệ hoa","Vòng hoa","Bình hoa","Hoa cài áo"];

        sort($types);
        $faker =Faker\Factory::create('vi_VN'); // cấu hình
        $today=new Carbon('2018-11-01 18:20:00');// định dạng giờ
        $trangthai=$faker->numberBetween(1,2);
        for($i=1;$i<=count($types);$i++){
            array_push($list,[
                'l_ma'=>$i,
                'l_ten'=>$types[$i-1],
                'l_taoMoi'=>$today->format('Y-m-d H:i:s'),
                'l_capNhat'=>$today->format('Y-m-d H:i:s'),
                'l_trangthai'=>$trangthai,
            ]);
        }
        DB::table('loai')->insert($list);
    }
}
