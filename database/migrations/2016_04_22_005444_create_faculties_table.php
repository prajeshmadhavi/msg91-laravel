<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacultiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('faculties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('dob');
            $table->string('gender');
            $table->unsignedInteger('university_id');
            $table->string('avatar')->default('/assets/img/shawaz.jpg');
            $table->string('password');
            $table->boolean('is_active')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('faculty_subjects', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('department_id')->index();
            $table->unsignedInteger('faculty_id')->index();
            $table->unsignedInteger('subject_id')->index();
        });

//        Schema::create('department_faculty', function (Blueprint $table) {
//            $table->increments('id');
//            $table->unsignedInteger('department_id')->index();
//            $table->unsignedInteger('faculty_id')->index();
//        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('faculties');
        Schema::drop('faculty_subjects');
        Schema::drop('faculty_departments');
    }
}
