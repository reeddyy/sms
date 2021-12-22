<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrolmentsQualificationsTable extends Migration
{
    public function up()
    {
        Schema::create('enrolments_qualifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('enrolment_no')->unique();
            $table->string('company_sponsored');
            $table->decimal('total_fees', 15, 2)->nullable();
            $table->decimal('amount_paid', 15, 2)->nullable();
            $table->decimal('outstanding_balance', 15, 2)->nullable();
            $table->decimal('instalment_fee_1', 15, 2)->nullable();
            $table->date('due_date_1')->nullable();
            $table->decimal('instalment_fee_2', 15, 2)->nullable();
            $table->date('due_date_2')->nullable();
            $table->decimal('instalment_fee_3', 15, 2)->nullable();
            $table->date('due_date_3')->nullable();
            $table->longText('note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
