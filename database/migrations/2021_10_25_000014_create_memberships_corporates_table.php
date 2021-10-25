<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipsCorporatesTable extends Migration
{
    public function up()
    {
        Schema::create('memberships_corporates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('valid_from')->nullable();
            $table->date('valid_till')->nullable();
            $table->string('member_no')->unique();
            $table->decimal('training_credits', 15, 2)->nullable();
            $table->date('admission_date')->nullable();
            $table->longText('note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
