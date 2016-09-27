<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('added_by')->nullable();
            $table->timestamps();
        });

        Schema::create('university_department_subjects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('department_id')->index();
            $table->string('subject_id')->index();
            $table->string('university_id')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('departments');
        Schema::drop('university_department_subjects');
    }
}
