<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToSfIndividualsTable extends Migration
{
    public function up()
    {
        Schema::table('sf_individuals', function (Blueprint $table) {
            $table->unsignedBigInteger('member_no_id');
            $table->foreign('member_no_id', 'member_no_fk_4947818')->references('id')->on('memberships_individuals');
            $table->unsignedBigInteger('fund_name_id');
            $table->foreign('fund_name_id', 'fund_name_fk_4947809')->references('id')->on('support_funds');
            $table->unsignedBigInteger('purpose_id')->nullable();
            $table->foreign('purpose_id', 'purpose_fk_4947817')->references('id')->on('cf_purposes');
        });
    }
}
