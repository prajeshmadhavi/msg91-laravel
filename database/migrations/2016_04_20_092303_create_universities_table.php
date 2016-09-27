<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniversitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('universities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('alternate_phone')->nullable();
            $table->text('additional_comment')->nullable();
            $table->string('logo')->default('/assets/images/logosu.jpg');
            $table->boolean('is_verified')->default(false);
            $table->boolean('active')->default(false);
            $table->timestamps();
        });


        Schema::create('university_departments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('department_id')->index();
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
        Schema::drop('universities');
        Schema::drop('university_departments');
    }
}
