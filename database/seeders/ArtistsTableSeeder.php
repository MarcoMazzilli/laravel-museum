<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Artist;
use App\Helpers\FunctionHelper;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 25 ; $i++) {

            $new_artist = New Artist;

            $new_artist->artist_name = $faker->name();
            $new_artist->artist_lastname = $faker->lastName();

            $str_to_slug = $new_artist->artist_name . ' ' . $new_artist->artist_lastname;
            $new_artist->slug = FunctionHelper::generateUniqueSlug($str_to_slug, New Artist());

            $new_artist->date_of_birth = $faker->date();
            $new_artist->place_of_birth = $faker->city();
            $new_artist->alive = rand(0,1);
            $new_artist->category = 'undefined';
            $new_artist->composition = rand(1,300);

            $new_artist->save();

        }
    }
}
