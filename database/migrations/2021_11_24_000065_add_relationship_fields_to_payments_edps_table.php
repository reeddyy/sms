<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToPaymentsEdpsTable extends Migration
{
    public function up()
    {
        Schema::table('payments_edps', function (Blueprint $table) {
            $table->unsignedBigInteger('admission_no_id');
            $table->foreign('admission_no_id', 'admission_no_fk_5158089')->references('id')->on('admissions_edps');
            $table->unsignedBigInteger('payment_source_id');
            $table->foreign('payment_source_id', 'payment_source_fk_5158081')->references('id')->on('payment_sources');
        });
    }
}
