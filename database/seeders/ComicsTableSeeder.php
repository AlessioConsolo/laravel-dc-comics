<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comic;
use Faker\Factory as Faker;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Comic::create([
                'title' => $faker->word(),
                'description' => $faker->paragraph(),
                'thumb' => $faker->imageUrl(200, 300, 'comics', true),
                'price' => $faker->randomFloat(2, 1, 100),
                'series' => $faker->word(),
                'sale_date' => $faker->date(),
                'type' => $faker->randomElement(['comic book', 'graphic novel']),
            ]);
        }
    }
}
