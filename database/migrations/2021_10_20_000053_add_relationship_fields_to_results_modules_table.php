<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToResultsModulesTable extends Migration
{
    public function up()
    {
        Schema::table('results_modules', function (Blueprint $table) {
            $table->unsignedBigInteger('enrolment_no_id');
            $table->foreign('enrolment_no_id', 'enrolment_no_fk_5158021')->references('id')->on('enrolments_qualifications');
            $table->unsignedBigInteger('module_1_id')->nullable();
            $table->foreign('module_1_id', 'module_1_fk_5158027')->references('id')->on('modules');
            $table->unsignedBigInteger('grade_1_id')->nullable();
            $table->foreign('grade_1_id', 'grade_1_fk_5158028')->references('id')->on('grades');
            $table->unsignedBigInteger('module_2_id')->nullable();
            $table->foreign('module_2_id', 'module_2_fk_5158029')->references('id')->on('modules');
            $table->unsignedBigInteger('grade_2_id')->nullable();
            $table->foreign('grade_2_id', 'grade_2_fk_5158030')->references('id')->on('grades');
            $table->unsignedBigInteger('module_3_id')->nullable();
            $table->foreign('module_3_id', 'module_3_fk_5158031')->references('id')->on('modules');
            $table->unsignedBigInteger('grade_3_id')->nullable();
            $table->foreign('grade_3_id', 'grade_3_fk_5158032')->references('id')->on('grades');
            $table->unsignedBigInteger('module_4_id')->nullable();
            $table->foreign('module_4_id', 'module_4_fk_5158033')->references('id')->on('modules');
            $table->unsignedBigInteger('grade_4_id')->nullable();
            $table->foreign('grade_4_id', 'grade_4_fk_5158034')->references('id')->on('grades');
            $table->unsignedBigInteger('module_5_id')->nullable();
            $table->foreign('module_5_id', 'module_5_fk_5158035')->references('id')->on('modules');
            $table->unsignedBigInteger('grade_5_id')->nullable();
            $table->foreign('grade_5_id', 'grade_5_fk_5158036')->references('id')->on('grades');
            $table->unsignedBigInteger('module_6_id')->nullable();
            $table->foreign('module_6_id', 'module_6_fk_5158037')->references('id')->on('modules');
            $table->unsignedBigInteger('grade_6_id')->nullable();
            $table->foreign('grade_6_id', 'grade_6_fk_5158038')->references('id')->on('grades');
            $table->unsignedBigInteger('achievement_title_id')->nullable();
            $table->foreign('achievement_title_id', 'achievement_title_fk_5158042')->references('id')->on('achievements');
        });
    }
}
