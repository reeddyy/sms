<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentSourcesTable extends Migration
{
    public function up()
    {
        Schema::create('payment_sources', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('payment_source_name')->unique();
            $table->longText('note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
