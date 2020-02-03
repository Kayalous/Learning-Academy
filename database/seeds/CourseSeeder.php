<?php

use Illuminate\Database\Seeder;
use App\Course;
use Faker\Provider\Lorem;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 3; $i++) {
            for ($j = 1; $j <= 6; $j++) {
                Course::create([
                    'cat_id' => $i,
                    'trainer_id' => rand(9, 12),
                    'name' => "course $i$j",
                    'small_desc' => 'this is a small description',
                    'desc' => 'This is a really really really really really really really really long desc',
                    'price' => rand(1000, 5000),
                    'img' => "$i$j.png"
                ]);
            }
        }
    }
}
