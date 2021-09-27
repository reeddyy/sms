<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToTcIndividualsTable extends Migration
{
    public function up()
    {
        Schema::table('tc_individuals', function (Blueprint $table) {
            $table->unsignedBigInteger('member_no_id');
            $table->foreign('member_no_id', 'member_no_fk_4947714')->references('id')->on('memberships_individuals');
            $table->unsignedBigInteger('purpose_id')->nullable();
            $table->foreign('purpose_id', 'purpose_fk_4947713')->references('id')->on('cf_purposes');
        });
    }
}
