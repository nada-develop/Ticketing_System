<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Comments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('comment');
            $table->unsignedBigInteger('ticket_id')->index();
            $table->unsignedBigInteger('user_id')->index();
            $table->unsignedBigInteger('status_id')->index();
            $table->timestamps();

            $table->foreign('ticket_id')->references('id')->on('tickets')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('status_id')->references('id')->on('statuses')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
