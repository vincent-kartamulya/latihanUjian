<?php

namespace Database\Seeders;

use App\Models\Detail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create("id_ID");
        for($i=1;$i<11;$i++){
            Detail::create([
                "book_id" => $i,
                "author" => $faker->company(),
                "publisher" => $faker->company(),
                "year" => $faker->year(),
                "description" => $faker->paragraph()
            ]);
        }
    }
}
