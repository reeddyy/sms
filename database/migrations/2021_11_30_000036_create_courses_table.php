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
            $table->string('course_title')->unique();
            $table->string('course_abbr')->unique();
            $table->integer('duration_month')->nullable();
            $table->decimal('member_rate', 15, 2)->nullable();
            $table->decimal('public_rate', 15, 2)->nullable();
            $table->decimal('course_fee', 15, 2)->nullable();
            $table->decimal('m_el_fee', 15, 2)->nullable();
            $table->decimal('examination_fee', 15, 2)->nullable();
            $table->decimal('registration_fee', 15, 2)->nullable();
            $table->integer('no_of_instalment')->nullable();
            $table->decimal('instalment_fee_1st', 15, 2)->nullable();
            $table->integer('due_day_s_1st')->nullable();
            $table->decimal('instalment_fee_2nd', 15, 2)->nullable();
            $table->integer('due_day_s_2nd')->nullable();
            $table->decimal('instalment_fee_3rd', 15, 2)->nullable();
            $table->integer('due_day_s_3rd')->nullable();
            $table->string('course_status');
            $table->longText('note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
