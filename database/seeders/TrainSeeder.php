<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 10; $i++) {
            $new_train = new Train();

            $new_train->company = $faker->word();
            $new_train->departure_station = $faker->words(2, true);
            $new_train->arriving_station = $faker->words(2, true);
            $new_train->departure_day = $faker->dateTime();
            $new_train->arriving_day = $faker->dateTime();
            $new_train->departure_hour = $faker->time();
            $new_train->arriving_hour = $faker->time();
            $new_train->train_code = $faker->randomNumber(5, true);
            $new_train->wagon_number = $faker->numberBetween(1, 12);
            $new_train->is_on_time = $faker->boolean();
            $new_train->is_cancelled = $faker->boolean();

            $new_train->save();
        }
    }
}
