<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacilitatorsTable extends Migration
{
    public function up()
    {
        Schema::create('facilitators', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('facilitator_title')->nullable();
            $table->string('facilitator_name');
            $table->longText('note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
