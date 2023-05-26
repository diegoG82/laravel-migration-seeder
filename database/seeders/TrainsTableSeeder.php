<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Factory as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
    
       
        for ($i = 1; $i <= 50; $i++) {
            $date = $faker->dateTimeBetween('-1 day', '+1 day'); 
            $formattedDate = $date->format('Y-m-d');
    
            Train::create([
                'azienda' => $faker->company,
                'data_treno' => $formattedDate,
                'stazione_partenza' => $faker->city,
                'stazione_arrivo' => $faker->city,
                'orario_partenza' => $faker->time('H:i:s'),
                'orario_arrivo' => $faker->time('H:i:s'),
                'codice_treno' => $faker->randomNumber(5),
                'numero_carrozze' => $faker->randomDigitNotNull,
                'in_orario' => $faker->boolean,
                'cancellato' => $faker->boolean,
            ]);
        }
    }
    
}
