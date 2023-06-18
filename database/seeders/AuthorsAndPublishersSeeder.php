<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Publisher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AuthorsAndPublishersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Generate 10 Author names

        for ($i = 0; $i < 10; $i++) {
            Author::create([
                'name' => $faker->name,
            ]);
        }

        // Generate 10 Publisher names
        for ($i = 0; $i < 10; $i++) {
            Publisher::create([
                'name' => $faker->company,
            ]);
        }
    }
}
