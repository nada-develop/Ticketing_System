<?php

namespace Database\Seeders;
use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create([
          "name" => "Sales"
        ]);

        Department::create([
            "name" => "Customer Services"
          ]);

          Department::create([
            "name" => "Management & Operation"
          ]);

    }
}
