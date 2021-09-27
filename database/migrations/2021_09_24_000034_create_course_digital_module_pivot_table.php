<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseDigitalModulePivotTable extends Migration
{
    public function up()
    {
        Schema::create('course_digital_module', function (Blueprint $table) {
            $table->unsignedBigInteger('course_id');
            $table->foreign('course_id', 'course_id_fk_4947649')->references('id')->on('courses')->onDelete('cascade');
            $table->unsignedBigInteger('digital_module_id');
            $table->foreign('digital_module_id', 'digital_module_id_fk_4947649')->references('id')->on('digital_modules')->onDelete('cascade');
        });
    }
}
