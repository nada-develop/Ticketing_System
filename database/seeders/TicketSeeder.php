<?php

namespace Database\Seeders;
use App\Models\Ticket;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Ticket::create([
            "title" => "طلب تغيير تذكره واضافه شنطه",
            "description" => "طلب العميل تغيير وقت العوده الي يوم 25 فبراير مع اضافه حقيبه جديده بوزن 45 كيلو جرام",
            "category_id" => 4,
            "customer_id" => 1,
            "user_id" => 1
          ]);

        Ticket::create([
            "title" => "   طلب تغيير تذكرة ولم يتم التغيير",
            "description" => "قام العميل بطلب تغيير تذكرة ولم يتم تنفيذ طلبه",
            "category_id" => 2,
            "customer_id" => 3,
            "user_id" => 4
          ]);

          Ticket::create([
            "title" => " هل يوجد ميعاد لرحله معينه",
            "description" => " استعلام عن ميعاد لرحله معينه",
            "category_id" => 1,
            "customer_id" => 3,
            "user_id" => 3
          ]);

          Ticket::create([
            "title" => " اقتراح اضافة خدمه جديده",
            "description" => " اقتراح لاضافة خدمه جديده للعملاء",
            "category_id" => 3,
            "customer_id" => 6,
            "user_id" => 2
          ]);
    }
}
