<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusQualificationsTable extends Migration
{
    public function up()
    {
        Schema::create('status_qualifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('status_name')->unique();
            $table->longText('note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
