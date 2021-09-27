<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToPaymentsIndividualsTable extends Migration
{
    public function up()
    {
        Schema::table('payments_individuals', function (Blueprint $table) {
            $table->unsignedBigInteger('member_no_id');
            $table->foreign('member_no_id', 'member_no_fk_4947774')->references('id')->on('memberships_individuals');
        });
    }
}
