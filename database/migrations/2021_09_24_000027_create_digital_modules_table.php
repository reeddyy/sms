<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDigitalModulesTable extends Migration
{
    public function up()
    {
        Schema::create('digital_modules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('module_name')->unique();
            $table->string('module_abbr')->unique();
            $table->string('module_code')->unique();
            $table->string('module_status');
            $table->longText('note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
