<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehiclesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vehicles')->insert([
            [
                'user_id' => 1,
                'name' => 'Toyota Prius', 
                'model' => 'Prius 2023', 
                'license_plate' => '123-XYZ'
            ],
            [
                'user_id' => 2, 
                'name' => 'Honda Fit', 
                'model' => 'Fit 2022', 
                'license_plate' => '456-ABC'
            ],
        ]);    
    }
}
