<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingCreditsTable extends Migration
{
    public function up()
    {
        Schema::create('training_credits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('tc_brought_forward', 15, 2)->nullable();
            $table->decimal('training_credit', 15, 2)->nullable();
            $table->decimal('digital_resisilience_fund', 15, 2)->nullable();
            $table->decimal('digital_enabler_fund', 15, 2)->nullable();
            $table->decimal('cf_used', 15, 2)->nullable();
            $table->decimal('cf_avaliable', 15, 2)->nullable();
            $table->date('valid_till')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
