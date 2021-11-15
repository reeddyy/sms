<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsCorporatesTable extends Migration
{
    public function up()
    {
        Schema::create('payments_corporates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('payment_amount', 15, 2)->nullable();
            $table->date('payment_date')->nullable();
            $table->string('invoice_no')->nullable();
            $table->string('membership')->nullable();
            $table->date('member_valid_till')->nullable();
            $table->longText('note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
