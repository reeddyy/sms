<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrolmentsQualificationStatusQualificationPivotTable extends Migration
{
    public function up()
    {
        Schema::create('enrolments_qualification_status_qualification', function (Blueprint $table) {
            $table->unsignedBigInteger('enrolments_qualification_id');
            $table->foreign('enrolments_qualification_id', 'enrolments_qualification_id_fk_5390239')->references('id')->on('enrolments_qualifications')->onDelete('cascade');
            $table->unsignedBigInteger('status_qualification_id');
            $table->foreign('status_qualification_id', 'status_qualification_id_fk_5390239')->references('id')->on('status_qualifications')->onDelete('cascade');
        });
    }
}
