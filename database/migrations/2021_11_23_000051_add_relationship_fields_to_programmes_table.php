<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToProgrammesTable extends Migration
{
    public function up()
    {
        Schema::table('programmes', function (Blueprint $table) {
            $table->unsignedBigInteger('level_id')->nullable();
            $table->foreign('level_id', 'level_fk_5157966')->references('id')->on('levels');
        });
    }
}
