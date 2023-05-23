<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            "category" => "Fiction"
        ]);
        Category::create([
            "category" => "Adventure"
        ]);
        Category::create([
            "category" => "Horror"
        ]);
        Category::create([
            "category" => "Jungle"
        ]);
    }
}
