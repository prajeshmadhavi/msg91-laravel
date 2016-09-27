<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('location');
            $table->string('preview_image');
            $table->text('event_days');
            $table->text('starts');
            $table->text('ends');
            $table->unsignedInteger('poster_id');
            $table->string('poster_type');
            $table->string('privacy');
            $table->timestamps();
        });
    }




    /**
     * Reverse the migrations.
     *
     * @return void
     */


    public function down()
    {
        Schema::drop('events');
    }
}
