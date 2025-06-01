<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FuelRecordsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fuel_records')->insert([
            [
                'vehicle_id' => 1, 
                'user_id' => 1, 
                'fuel_amount' => 50, 
                'distance' => 300, 
                'fuel_efficiency' => 6.0
            ],
        ]);
    }
}
