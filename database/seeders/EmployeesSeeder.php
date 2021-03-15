<?php

namespace Database\Seeders;
use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::create([
            "name" => "baher",
            "mobile_number" => "01051565",
            "home_number" => "022345678",
            "email" => "baher@yahoo.com",
            "address" => "elmaadi",
            "city_id" => 1,
            "hiring_date" => "1988-5-12",
            "department_id" => 1,
            "user_id" => 3
          ]);

          Employee::create([
            "name" => "samy",
            "mobile_number" => "010521565",
            "home_number" => "02255458",
            "email" => "samy@yahoo.com",
            "address" => "fashn",
            "city_id" => 3,
            "hiring_date" => "1990-5-5",
            "department_id" => 2,
            "user_id" => 2
          ]);

          Employee::create([
            "name" => "fahmy",
            "mobile_number" => "01161565",
            "home_number" => "02266458",
            "email" => "fahmy@yahoo.com",
            "address" => "benimazar",
            "city_id" => 3,
            "hiring_date" => "1990-5-5",
            "department_id" => 3,
            "user_id" => 1
          ]);

          Employee::create([
            "name" => "amro",
            "mobile_number" => "010056987",
            "home_number" => "02247758",
            "email" => "amro@yahoo.com",
            "address" => "belbes",
            "city_id" => 6,
            "hiring_date" => "1990-5-5",
            "department_id" => 2,
            "user_id" => 4
          ]);
      }

}
