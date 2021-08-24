<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration
{
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('grade');
            $table->string('grade_description')->nullable();
            $table->integer('grade_point')->nullable();
            $table->string('grade_marks')->nullable();
            $table->timestamps();
        });
    }
}
