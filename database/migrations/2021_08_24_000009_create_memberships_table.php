<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipsTable extends Migration
{
    public function up()
    {
        Schema::create('memberships', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('membership_no')->unique();
            $table->timestamps();
        });
    }
}
