<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Coffee', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cake', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
