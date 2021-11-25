<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassIntakeEnrolmentsQualificationPivotTable extends Migration
{
    public function up()
    {
        Schema::create('class_intake_enrolments_qualification', function (Blueprint $table) {
            $table->unsignedBigInteger('enrolments_qualification_id');
            $table->foreign('enrolments_qualification_id', 'enrolments_qualification_id_fk_5157985')->references('id')->on('enrolments_qualifications')->onDelete('cascade');
            $table->unsignedBigInteger('class_intake_id');
            $table->foreign('class_intake_id', 'class_intake_id_fk_5157985')->references('id')->on('class_intakes')->onDelete('cascade');
        });
    }
}
