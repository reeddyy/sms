<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToPaymentsQualificationsTable extends Migration
{
    public function up()
    {
        Schema::table('payments_qualifications', function (Blueprint $table) {
            $table->unsignedBigInteger('enrolment_no_id');
            $table->foreign('enrolment_no_id', 'enrolment_no_fk_5157993')->references('id')->on('enrolments_qualifications');
            $table->unsignedBigInteger('payment_source_id');
            $table->foreign('payment_source_id', 'payment_source_fk_5157994')->references('id')->on('payment_sources');
        });
    }
}
