<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "baher",
            "email" => "baher@yahoo.com",
            "password" => Hash::make('123456789')

        ]);
        User::create([
            "name" => "samy",
            "email" => "samy@yahoo.com",
            "password" => Hash::make('123456789')

        ]);
        User::create([
            "name" => "fahmy",
            "email" => "fahmy@yahoo.com",
            "password" => Hash::make('123456789')

        ]);
        User::create([
            "name" => "amro",
            "email" => "amro@yahoo.com",
            "password" => Hash::make('123456789')

        ]);
    }
}
