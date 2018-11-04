<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ChuDeTableSeedeer extends Seeder
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
           $created=$now->copy()->addSeconds($faker->numberBetween(1,259200));
           $update=$created->copy()->addSeconds($faker->numberBetween(300,172800));
            $trangthai=$faker->numberBetween(1,2);

           array_push($list,[
            'cd_taoMoi'=>$created,
            'cd_capnhat'=>$update,
            'cd_ten'=>$faker->text(50),
            'cd_trangthai'=>$trangthai,
           ]);
           $now=$update->copy();
       }
       DB::table('chude')->insert($list);
    }
}
