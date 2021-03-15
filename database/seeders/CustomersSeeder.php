<?php
namespace Database\Seeders;
use App\Models\Customer;

use Illuminate\Database\Seeder;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
          "name" => "aly",
          "email" => "aly@gmail.com",
          "phone" => "012345678",
          "address" => "elnady-elahly nasrcity",
          "city_id" => 1
        ]);
        Customer::create([
            "name" => "hasan",
            "email" => "hasan@gmail.com",
            "phone" => "011345678",
            "address" => "elnady-st maghagha",
            "city_id" => 3
          ]);
          Customer::create([
            "name" => "reham",
            "email" => "reham@gmail.com",
            "phone" => "010045678",
            "address" => "elnady-st dairot",
            "city_id" => 4
          ]);
          Customer::create([
            "name" => "asmaa",
            "email" => "asmaa@gmail.com",
            "phone" => "012245678",
            "address" => "elnady-st beniswif",
            "city_id" => 5
          ]);
          Customer::create([
            "name" => "hasnaa",
            "email" => "hasnaa@gmail.com",
            "phone" => "011145678",
            "address" => "elnadyelahly menouf",
            "city_id" => 6
          ]);
          Customer::create([
            "name" => "adel",
            "email" => "adel@gmail.com",
            "phone" => "010545678",
            "address" => "elnadyelahly agamy",
            "city_id" => 2
          ]);
    }
}
