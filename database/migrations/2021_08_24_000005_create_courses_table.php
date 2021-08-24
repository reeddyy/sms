<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('course_name')->unique();
            $table->string('course_abbr')->unique();
            $table->string('course_level');
            $table->string('course_duration')->nullable();
            $table->decimal('course_total_fee', 15, 2)->nullable();
            $table->decimal('course_fee', 15, 2)->nullable();
            $table->decimal('m_el_fee', 15, 2)->nullable();
            $table->decimal('examination_fee', 15, 2)->nullable();
            $table->decimal('registration_fee', 15, 2)->nullable();
            $table->integer('no_of_instalment')->nullable();
            $table->decimal('instalment_1_fee', 15, 2)->nullable();
            $table->decimal('instalment_2_fee', 15, 2)->nullable();
            $table->decimal('instalment_3_fee', 15, 2)->nullable();
            $table->timestamps();
        });
    }
}
