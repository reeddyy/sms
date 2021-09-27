<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipsIndividualsTable extends Migration
{
    public function up()
    {
        Schema::create('memberships_individuals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('start_date')->nullable();
            $table->date('valid_till')->nullable();
            $table->string('member_no')->unique();
            $table->decimal('training_credits', 15, 2)->nullable();
            $table->decimal('support_funds', 15, 2)->nullable();
            $table->longText('note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
