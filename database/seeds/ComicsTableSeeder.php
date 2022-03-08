<?php

use App\Comic;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {

            $comic = new Comic();
            $comic->title = $faker->text('50');
            $comic->description = $faker->text();
            $comic->thumb = $faker->imageUrl(640, 480, 'comics', true);;
            $comic->price = $faker->randomFloat(2, 0, 30);
            $comic->series = $faker->text('50');
            $comic->sale_date = $faker->dateTimeBetween();
            $comic->Type = $faker->text('50');
            $comic->save();
        }
    }
}
