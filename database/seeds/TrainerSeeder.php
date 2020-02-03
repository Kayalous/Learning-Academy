<?php

use Illuminate\Database\Seeder;
use App\Trainer;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trainer::create([
            'name' => 'Abdulrhman Elkayal',
            'spec' => 'web development',
            'phone' => '01206882962',
            'img' => '1.png'
        ]);
        Trainer::create([
            'name' => 'Abdulrhman Ahmed',
            'spec' => 'doctor',
            'phone' => '01206882962',
            'img' => '1.png'
        ]);
        Trainer::create([
            'name' => 'Ahmed Zakii',
            'spec' => 'architecture',
            'phone' => '01206882962',
            'img' => '1.png'
        ]);
        Trainer::create([
            'name' => 'Kahled Tag',
            'spec' => 'web development',
            'phone' => '01206882962',
            'img' => '1.png'
        ]);
    }
}
