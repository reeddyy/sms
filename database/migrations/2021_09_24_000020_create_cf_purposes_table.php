<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfPurposesTable extends Migration
{
    public function up()
    {
        Schema::create('cf_purposes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('purpose_name')->unique();
            $table->longText('note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
