<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToEnrolmentsQualificationsTable extends Migration
{
    public function up()
    {
        Schema::table('enrolments_qualifications', function (Blueprint $table) {
            $table->unsignedBigInteger('enrolment_status_id');
            $table->foreign('enrolment_status_id', 'enrolment_status_fk_4947738')->references('id')->on('statuses');
            $table->unsignedBigInteger('course_title_id');
            $table->foreign('course_title_id', 'course_title_fk_4947740')->references('id')->on('courses');
            $table->unsignedBigInteger('student_name_id');
            $table->foreign('student_name_id', 'student_name_fk_4947741')->references('id')->on('individuals');
            $table->unsignedBigInteger('officer_name_id')->nullable();
            $table->foreign('officer_name_id', 'officer_name_fk_4947743')->references('id')->on('officers');
        });
    }
}
