<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::table('stores')->insert([
        [
            'name' => 'Gas Station A', 
            'address' => '123 Main St', 
            'user_id' => 1
        ],
        [
            'name' => 'Supermarket B', 
            'address' => '456 Market Ave', 
            'user_id' => 2
        ],
    ]);
    }
}
