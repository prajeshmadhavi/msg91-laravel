<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('registration_id');
            $table->string('name');
            $table->string('dob');
            $table->string('batch_year');
            $table->string('gender');
            $table->string('phone')->unique();
            $table->string('avatar')->default('/assets/img/shawaz.jpg');
            $table->string('cover_photo');
            $table->unsignedInteger('department_id');
            $table->unsignedInteger('university_id');
            $table->boolean('is_active')->default(false);
            $table->string('password');
            $table->string('totp')->nullable();
            $table->string('totp_status')->default('expired');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('student_subject', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('student_id')->index();
            $table->unsignedInteger('subject_id')->index();
            $table->unsignedInteger('faculty_id')->index();
            $table->unsignedInteger('department_id')->index();
            $table->unsignedInteger('university_id')->index();
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
        Schema::drop('students');
    }
}
