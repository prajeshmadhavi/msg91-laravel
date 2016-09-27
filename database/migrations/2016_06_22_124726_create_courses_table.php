<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('university_id');
            $table->unsignedInteger('moderator_id');
            $table->unsignedInteger('department_id');            
            $table->timestamps();
        });


        Schema::create('student_enrolled_courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('course_id');
            $table->unsignedInteger('student_id');
            $table->boolean('is_completed')->default(false);
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
        Schema::drop('courses');
    }
}
