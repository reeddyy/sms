<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassIntakesTable extends Migration
{
    public function up()
    {
        Schema::create('class_intakes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('class_name')->unique();
            $table->longText('note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
