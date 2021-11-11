<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsQualificationsTable extends Migration
{
    public function up()
    {
        Schema::create('payments_qualifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('payment_amount', 15, 2)->nullable();
            $table->date('payment_date')->nullable();
            $table->string('invoice_no')->nullable();
            $table->integer('instalment_no')->nullable();
            $table->longText('note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
