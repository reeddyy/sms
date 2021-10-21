<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionsEdpsTable extends Migration
{
    public function up()
    {
        Schema::create('admissions_edps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('admission_no')->unique();
            $table->string('company_sponsored');
            $table->decimal('total_fees', 15, 2)->nullable();
            $table->decimal('amount_paid', 15, 2)->nullable();
            $table->decimal('outstanding_balance', 15, 2)->nullable();
            $table->longText('note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
