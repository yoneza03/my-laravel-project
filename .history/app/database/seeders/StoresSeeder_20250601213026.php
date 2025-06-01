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
        DB::table('Stores')->insert([
            ['name' => 'Fuel'],
            ['name' => 'Food'],
            ['name' => 'Daily Necessities'],
        ]);
    }
}
