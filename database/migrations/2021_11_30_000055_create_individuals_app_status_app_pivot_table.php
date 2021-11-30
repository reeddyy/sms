<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndividualsAppStatusAppPivotTable extends Migration
{
    public function up()
    {
        Schema::create('individuals_app_status_app', function (Blueprint $table) {
            $table->unsignedBigInteger('individuals_app_id');
            $table->foreign('individuals_app_id', 'individuals_app_id_fk_5407400')->references('id')->on('individuals_apps')->onDelete('cascade');
            $table->unsignedBigInteger('status_app_id');
            $table->foreign('status_app_id', 'status_app_id_fk_5407400')->references('id')->on('status_apps')->onDelete('cascade');
        });
    }
}
