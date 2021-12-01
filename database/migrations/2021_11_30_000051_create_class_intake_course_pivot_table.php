<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassIntakeCoursePivotTable extends Migration
{
    public function up()
    {
        Schema::create('class_intake_course', function (Blueprint $table) {
            $table->unsignedBigInteger('course_id');
            $table->foreign('course_id', 'course_id_fk_5157894')->references('id')->on('courses')->onDelete('cascade');
            $table->unsignedBigInteger('class_intake_id');
            $table->foreign('class_intake_id', 'class_intake_id_fk_5157894')->references('id')->on('class_intakes')->onDelete('cascade');
        });
    }
}
