<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 51; $i++) {
            DB::table('products')->insert([
                'code' => Str::random(5),
                'name' => Str::random(20),
                'description' => Str::random(200),
                'category_id' => rand(1, 5),
                'price' => rand(100000, 1000000),
                'is_top' => rand(0, 1,),
                'on_sale' => rand(10000, 100000),
            ]);
        }
    }
}
