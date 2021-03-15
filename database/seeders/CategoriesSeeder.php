<?php
namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
         "name"=>"Inquery"
        ]);

        Category::create([
            "name"=>"Complain"
           ]);

        Category::create([
            "name"=>"Suggestion"
           ]);

        Category::create([
            "name"=>"Request"
           ]);

    }
}
