<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\ArtWork;

class ArtWorksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 25 ; $i++) {
            $new_opera = New ArtWork;

            $new_opera->artwork_name = $faker->name();
            $new_opera->slug = ArtWork::generateSlug($new_opera->artwork_name);
            $new_opera->artwork_description = $faker->sentence();
            $new_opera->artwork_year = $faker->date();
            $new_opera->artwork_image = $faker->word();

            $new_opera->save();
        }
    }
}
