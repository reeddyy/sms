<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToQualificationsTable extends Migration
{
    public function up()
    {
        Schema::table('qualifications', function (Blueprint $table) {
            $table->unsignedBigInteger('student_name_id');
            $table->foreign('student_name_id', 'student_name_fk_4705428')->references('id')->on('individuals');
            $table->unsignedBigInteger('course_name_id');
            $table->foreign('course_name_id', 'course_name_fk_4705429')->references('id')->on('courses');
            $table->unsignedBigInteger('module_name_id')->nullable();
            $table->foreign('module_name_id', 'module_name_fk_4708622')->references('id')->on('modules');
            $table->unsignedBigInteger('module_grade_id')->nullable();
            $table->foreign('module_grade_id', 'module_grade_fk_4708654')->references('id')->on('grades');
        });
    }
}
