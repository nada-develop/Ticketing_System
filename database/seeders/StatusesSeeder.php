<?php

namespace Database\Seeders;
use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
            "name" => "Pending"
        ]);

        Status::create([
            "name" => "Waiting for third-party"
        ]);

        Status::create([
            "name" => "Resolved"
        ]);

        Status::create([
            "name" => "Closet"
        ]);
    }
}
