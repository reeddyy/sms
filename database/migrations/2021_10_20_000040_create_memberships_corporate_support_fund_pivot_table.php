<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipsCorporateSupportFundPivotTable extends Migration
{
    public function up()
    {
        Schema::create('memberships_corporate_support_fund', function (Blueprint $table) {
            $table->unsignedBigInteger('memberships_corporate_id');
            $table->foreign('memberships_corporate_id', 'memberships_corporate_id_fk_5158188')->references('id')->on('memberships_corporates')->onDelete('cascade');
            $table->unsignedBigInteger('support_fund_id');
            $table->foreign('support_fund_id', 'support_fund_id_fk_5158188')->references('id')->on('support_funds')->onDelete('cascade');
        });
    }
}
