<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToTrainingCreditsCorporatesTable extends Migration
{
    public function up()
    {
        Schema::table('training_credits_corporates', function (Blueprint $table) {
            $table->unsignedBigInteger('member_no_id');
            $table->foreign('member_no_id', 'member_no_fk_5158207')->references('id')->on('memberships_corporates');
            $table->unsignedBigInteger('purpose_id')->nullable();
            $table->foreign('purpose_id', 'purpose_fk_5158211')->references('id')->on('credits_funds_purposes');
        });
    }
}
