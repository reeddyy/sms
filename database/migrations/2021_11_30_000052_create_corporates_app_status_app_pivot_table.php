<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorporatesAppStatusAppPivotTable extends Migration
{
    public function up()
    {
        Schema::create('corporates_app_status_app', function (Blueprint $table) {
            $table->unsignedBigInteger('corporates_app_id');
            $table->foreign('corporates_app_id', 'corporates_app_id_fk_5405451')->references('id')->on('corporates_apps')->onDelete('cascade');
            $table->unsignedBigInteger('status_app_id');
            $table->foreign('status_app_id', 'status_app_id_fk_5405451')->references('id')->on('status_apps')->onDelete('cascade');
        });
    }
}
