<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToTrainingCreditsIndividualsTable extends Migration
{
    public function up()
    {
        Schema::table('training_credits_individuals', function (Blueprint $table) {
            $table->unsignedBigInteger('member_no_id');
            $table->foreign('member_no_id', 'member_no_fk_5158120')->references('id')->on('memberships_individuals');
            $table->unsignedBigInteger('purpose_id')->nullable();
            $table->foreign('purpose_id', 'purpose_fk_5158124')->references('id')->on('credits_funds_purposes');
        });
    }
}
