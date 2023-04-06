<?php

namespace Database\Seeders;

use App\Models\Announcement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();
        foreach (range(1,100) as $index) {
            Announcement::insert([
                'user_id' => $faker->numberBetween(1, 2),
                'category_id' => $faker->numberBetween(1, 9),
                'title' => 'Titolo annuncio n. ' . $faker->numberBetween(0, 100),
                'description' => $faker->paragraph(),
                'price' => $faker->randomFloat(2, 1, 100),
                'created_at' => $faker->date('Y_m_d'),
                'updated_at' => now()
            ]);
        }

    }
}
