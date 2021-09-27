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
            $table->foreign('enrolment_no_id', 'enrolment_no_fk_4947785')->references('id')->on('enrolments_qualifications');
            $table->unsignedBigInteger('module_id');
            $table->foreign('module_id', 'module_fk_4947787')->references('id')->on('modules');
            $table->unsignedBigInteger('grade_id')->nullable();
            $table->foreign('grade_id', 'grade_fk_4947788')->references('id')->on('grades');
        });
    }
}
