<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToResultsDigitalModulesTable extends Migration
{
    public function up()
    {
        Schema::table('results_digital_modules', function (Blueprint $table) {
            $table->unsignedBigInteger('enrolment_no_id');
            $table->foreign('enrolment_no_id', 'enrolment_no_fk_4947794')->references('id')->on('enrolments_qualifications');
            $table->unsignedBigInteger('module_id');
            $table->foreign('module_id', 'module_fk_4947801')->references('id')->on('digital_modules');
            $table->unsignedBigInteger('grade_id')->nullable();
            $table->foreign('grade_id', 'grade_fk_4947796')->references('id')->on('grades');
        });
    }
}
