<?php

namespace Database\Seeders;
use App\Models\Comment;
use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create([
            "comment" => "يتم مراجعه شركه الطيران لتحديد امكانيه تغيير موعد التذكره",
            "ticket_id" => 1,
            "user_id" => 2,
            "status_id" => 1
             ]);

        Comment::create([
            "comment" => "تم ارسال ايميل لشركه الطيران وفي انتظار الرد بالتاكيد",
            "ticket_id" => 1,
            "user_id" => 3,
            "status_id" => 3
             ]);

        Comment::create([
            "comment" => "تم التأكيد بإضافه الحقيبه مع امكانيه تغيير موعد التذكره بتكلفه 5000 جنيه ",
            "ticket_id" => 1,
            "user_id" => 4,
            "status_id" => 4
                 ]);
    }
}
