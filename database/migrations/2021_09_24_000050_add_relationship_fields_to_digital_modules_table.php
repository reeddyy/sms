<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToDigitalModulesTable extends Migration
{
    public function up()
    {
        Schema::table('digital_modules', function (Blueprint $table) {
            $table->unsignedBigInteger('level_id')->nullable();
            $table->foreign('level_id', 'level_fk_4947626')->references('id')->on('levels');
        });
    }
}
