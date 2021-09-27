<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantsAdasTable extends Migration
{
    public function up()
    {
        Schema::create('applicants_adas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('validity_start')->nullable();
            $table->date('validity_end')->nullable();
            $table->string('ada_no')->unique();
            $table->decimal('amount_paid', 15, 2)->nullable();
            $table->date('payment_date')->nullable();
            $table->string('invoice_no')->nullable();
            $table->longText('note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
