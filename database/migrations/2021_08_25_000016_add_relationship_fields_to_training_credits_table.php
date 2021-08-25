<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToTrainingCreditsTable extends Migration
{
    public function up()
    {
        Schema::table('training_credits', function (Blueprint $table) {
            $table->unsignedBigInteger('membership_no_id');
            $table->foreign('membership_no_id', 'membership_no_fk_4715896')->references('id')->on('memberships');
        });
    }
}
