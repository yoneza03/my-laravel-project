<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            ['category_id' => 1, 'name' => 'たまご', 'user_id' => 1],
            ['category_id' => 1, 'name' => '醤油', 'user_id' => 1],
            ['category_id' => 2, 'name' => 'トイレットペーパー', 'user_id' => 2],
        ]);
    }
}