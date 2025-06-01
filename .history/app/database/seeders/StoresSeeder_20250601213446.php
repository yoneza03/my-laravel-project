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
            ['name' => 'イオン'],
            ['name' => '業務スーパー'],
            ['name' => 'ダイソー'],
        ]);
    }
}
