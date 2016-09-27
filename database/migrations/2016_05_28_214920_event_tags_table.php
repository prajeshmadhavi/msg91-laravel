<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class EventTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('event_tags', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('event_id');
            $table->string('tagger_type');
            $table->unsignedInteger('tagger_id');
            $table->unsignedInteger('taggee_id');
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
        //
    }
}
