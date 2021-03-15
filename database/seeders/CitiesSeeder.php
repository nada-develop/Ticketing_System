<?php

namespace Database\Seeders;
use App\Models\City;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create([
          "city_name" => "cairo"
        ]);

        City::create([
            "city_name" => "alex"
          ]);

          City::create([
            "city_name" => "minia"
          ]);

          City::create([
            "city_name" => "sohag"
          ]);

          City::create([
            "city_name" => "aswan"
          ]);

          City::create([
            "city_name" => "mansoura"
          ]);
    }
}
