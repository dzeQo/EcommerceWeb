<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'name' => 'iphone 12 pro max',
            'price' => '7500',
            'category' => 'phones',
            'description' => 'brand new iphone 12 pro max with  256gb as storage silver',
            'gallery' => 'https://cellbuddy.in/buddy/wp-content/uploads/2022/09/12-Pro-Max-Graphite-3.png'
        ]);

    }
}
