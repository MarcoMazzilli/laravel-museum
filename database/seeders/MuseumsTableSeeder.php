<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Museum;

class MuseumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 25 ; $i++) {
            $new_museum = New Museum;

            $new_museum->museum_name = $faker->company();
            $new_museum->latitude = $faker->latitude($min = -90, $max = 90);
            $new_museum->longitude = $faker->longitude($min = -180, $max = 180);
            $new_museum->city = $faker->city();
            $new_museum->type = 'undefined';

            $new_museum->save();
        }
    }
}
