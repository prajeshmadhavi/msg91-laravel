<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionTagTable extends Migration
{
    public function up()
    {
        //

        Schema::create('question_tags', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('question_id');
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
