<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToModulesTable extends Migration
{
    public function up()
    {
        Schema::table('modules', function (Blueprint $table) {
            $table->unsignedBigInteger('module_level_id')->nullable();
            $table->foreign('module_level_id', 'module_level_fk_5684167')->references('id')->on('levels');
        });
    }
}
