<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->text('files')->nullable();
            $table->string('preview_image')->default('https://s3-us-west-2.amazonaws.com/social-university/static/note_preview.png');
            $table->unsignedInteger('poster_id');
            $table->string('poster_type');
            $table->string('privacy');
            $table->unsignedInteger('subject_id')->nullable();
            $table->unsignedInteger('lecture_id')->nullable();
            $table->unsignedInteger('department_id')->nullable();
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
        Schema::drop('notes');
    }
}
