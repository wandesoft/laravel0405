<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('goods')->insert([
            ['goods_name'=>'玩具枪','cat_id'=>1,'goods_price'=>20],
            ['goods_name'=>'毛毛熊','cat_id'=>2,'goods_price'=>30.3],
            ['goods_name'=>'口香糖','cat_id'=>3,'goods_price'=>10],
        ]);
    }
}
