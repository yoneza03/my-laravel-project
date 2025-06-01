<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            ['category_id' => 1, 'name' => 'Premium Gasoline', 'user_id' => 1],
            ['category_id' => 1, 'name' => 'Regular Gasoline', 'user_id' => 1],
            ['category_id' => 2, 'name' => 'Mineral Water', 'user_id' => 2],
        ]);
    }
}