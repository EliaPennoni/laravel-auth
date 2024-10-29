<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\project;
use Faker\Factory as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Project::create([
                'title' => $faker->sentence(3),
                'price' => $faker->randomFloat(2, 1, 999),
                'description' => $faker->paragraph(),
                'image' => $faker->imageUrl(640, 480, 'projects', true), // immagine casuale
            ]);
        }
    }
}
