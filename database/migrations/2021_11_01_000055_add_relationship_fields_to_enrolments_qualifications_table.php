<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToEnrolmentsQualificationsTable extends Migration
{
    public function up()
    {
        Schema::table('enrolments_qualifications', function (Blueprint $table) {
            $table->unsignedBigInteger('app_no_id');
            $table->foreign('app_no_id', 'app_no_fk_5390240')->references('id')->on('qualifications_apps');
            $table->unsignedBigInteger('course_title_id');
            $table->foreign('course_title_id', 'course_title_fk_5157972')->references('id')->on('courses');
            $table->unsignedBigInteger('student_name_id');
            $table->foreign('student_name_id', 'student_name_fk_5157973')->references('id')->on('individuals');
            $table->unsignedBigInteger('officer_name_id')->nullable();
            $table->foreign('officer_name_id', 'officer_name_fk_5157975')->references('id')->on('officers');
        });
    }
}
