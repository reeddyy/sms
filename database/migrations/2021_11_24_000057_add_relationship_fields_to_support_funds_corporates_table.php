<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToSupportFundsCorporatesTable extends Migration
{
    public function up()
    {
        Schema::table('support_funds_corporates', function (Blueprint $table) {
            $table->unsignedBigInteger('member_no_id');
            $table->foreign('member_no_id', 'member_no_fk_5158217')->references('id')->on('memberships_corporates');
            $table->unsignedBigInteger('fund_name_id');
            $table->foreign('fund_name_id', 'fund_name_fk_5158218')->references('id')->on('support_funds');
            $table->unsignedBigInteger('purpose_id')->nullable();
            $table->foreign('purpose_id', 'purpose_fk_5158222')->references('id')->on('credits_funds_purposes');
        });
    }
}
