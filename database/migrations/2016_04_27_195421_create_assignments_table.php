<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('assignments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->boolean('has_quiz')->default(false);
            $table->string('due_date');
            $table->boolean('has_file')->default(false);
            $table->unsignedInteger('subject_id');
            $table->unsignedInteger('faculty_id');
            $table->timestamps();
        });

        Schema::create('student_assignments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('student_id')->index();
            $table->unsignedInteger('assignment_id')->index();
            $table->string('note_file')->nullable();
            $table->boolean('pending')->default(true);
            $table->boolean('approved')->default(false);
            $table->boolean('completed')->default(false);
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
        Schema::drop('assignments');
    }
}
