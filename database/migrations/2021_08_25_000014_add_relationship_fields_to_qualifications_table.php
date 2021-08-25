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
            $table->unsignedBigInteger('module_1_name_id')->nullable();
            $table->foreign('module_1_name_id', 'module_1_name_fk_4715313')->references('id')->on('modules');
            $table->unsignedBigInteger('module_1_grade_id')->nullable();
            $table->foreign('module_1_grade_id', 'module_1_grade_fk_4715314')->references('id')->on('grades');
            $table->unsignedBigInteger('module_2_name_id')->nullable();
            $table->foreign('module_2_name_id', 'module_2_name_fk_4715315')->references('id')->on('modules');
            $table->unsignedBigInteger('module_2_grade_id')->nullable();
            $table->foreign('module_2_grade_id', 'module_2_grade_fk_4715316')->references('id')->on('grades');
            $table->unsignedBigInteger('module_3_name_id')->nullable();
            $table->foreign('module_3_name_id', 'module_3_name_fk_4715317')->references('id')->on('modules');
            $table->unsignedBigInteger('module_3_grade_id')->nullable();
            $table->foreign('module_3_grade_id', 'module_3_grade_fk_4715318')->references('id')->on('grades');
            $table->unsignedBigInteger('module_4_name_id')->nullable();
            $table->foreign('module_4_name_id', 'module_4_name_fk_4715319')->references('id')->on('modules');
            $table->unsignedBigInteger('module_4_grade_id')->nullable();
            $table->foreign('module_4_grade_id', 'module_4_grade_fk_4715320')->references('id')->on('grades');
            $table->unsignedBigInteger('module_5_name_id')->nullable();
            $table->foreign('module_5_name_id', 'module_5_name_fk_4715321')->references('id')->on('modules');
            $table->unsignedBigInteger('module_5_grade_id')->nullable();
            $table->foreign('module_5_grade_id', 'module_5_grade_fk_4715322')->references('id')->on('grades');
            $table->unsignedBigInteger('module_6_name_id')->nullable();
            $table->foreign('module_6_name_id', 'module_6_name_fk_4715323')->references('id')->on('modules');
            $table->unsignedBigInteger('module_6_grade_id')->nullable();
            $table->foreign('module_6_grade_id', 'module_6_grade_fk_4715324')->references('id')->on('grades');
        });
    }
}
