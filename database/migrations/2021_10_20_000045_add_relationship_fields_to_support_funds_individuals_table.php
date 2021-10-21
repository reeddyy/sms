<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToSupportFundsIndividualsTable extends Migration
{
    public function up()
    {
        Schema::table('support_funds_individuals', function (Blueprint $table) {
            $table->unsignedBigInteger('member_no_id');
            $table->foreign('member_no_id', 'member_no_fk_5158130')->references('id')->on('memberships_individuals');
            $table->unsignedBigInteger('fund_name_id');
            $table->foreign('fund_name_id', 'fund_name_fk_5158131')->references('id')->on('support_funds');
            $table->unsignedBigInteger('purpose_id')->nullable();
            $table->foreign('purpose_id', 'purpose_fk_5158135')->references('id')->on('credits_funds_purposes');
        });
    }
}
