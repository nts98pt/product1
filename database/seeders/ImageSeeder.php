<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 3; $i < 201; $i++) {
            DB::table('images')->insert([
                'path' => 'http://placehold.it/250x150',
                'product_id' => rand(3, 50),
            ]);
        }
    }
}
