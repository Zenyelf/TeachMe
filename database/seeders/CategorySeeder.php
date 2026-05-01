<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'id' => '1', 
                'name' => 'Development', 
                'description' => 'Coding and Software',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '2', 
                'name' => 'Design', 
                'description' => 'UI/UX and Graphic Design',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '3', 
                'name' => 'Business', 
                'description' => 'Marketing and Startups',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => '4', 
                'name' => 'Marketing', 
                'description' => 'Marketing and money boiiiiii',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}