<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQualificationsTable extends Migration
{
    public function up()
    {
        Schema::create('qualifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('course_start_date');
            $table->date('course_end_date')->nullable();
            $table->string('enrolment_status');
            $table->string('company_sponsored');
            $table->string('company_name')->nullable();
            $table->string('company_address_line_1')->nullable();
            $table->string('company_address_line_2')->nullable();
            $table->string('country')->nullable();
            $table->integer('postal_code')->nullable();
            $table->string('officer_in_charge_name')->nullable();
            $table->string('officer_designation')->nullable();
            $table->string('officer_contact_no')->nullable();
            $table->string('officer_email_address')->nullable();
            $table->decimal('ssg_claim_amount', 15, 2)->nullable();
            $table->string('ssg_claim_no')->nullable();
            $table->date('ssg_payment_date')->nullable();
            $table->string('ssg_receipt_no')->nullable();
            $table->decimal('waive_amount', 15, 2)->nullable();
            $table->decimal('tc_utilised_amount', 15, 2)->nullable();
            $table->decimal('payment_amount', 15, 2)->nullable();
            $table->date('payment_date')->nullable();
            $table->string('receipt_no')->nullable();
            $table->string('payment_note')->nullable();
            $table->decimal('amount_paid', 15, 2)->nullable();
            $table->decimal('outstanding_balance', 15, 2)->nullable();
            $table->date('results_release_date')->nullable();
            $table->date('transcript_1_release_date')->nullable();
            $table->date('transcript_2_release_date')->nullable();
            $table->longText('note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
