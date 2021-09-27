<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsDigitalModulesTable extends Migration
{
    public function up()
    {
        Schema::create('results_digital_modules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date_release');
            $table->longText('note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
