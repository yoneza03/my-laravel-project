<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FamilySharingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('family_sharing')->insert([
            [
                'admin_id' => 1, 
                'shared_user_id' => 2, 
                'role' => 'member'
            ],
        ]);
    }
}
