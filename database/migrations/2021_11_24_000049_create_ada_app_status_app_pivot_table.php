<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdaAppStatusAppPivotTable extends Migration
{
    public function up()
    {
        Schema::create('ada_app_status_app', function (Blueprint $table) {
            $table->unsignedBigInteger('ada_app_id');
            $table->foreign('ada_app_id', 'ada_app_id_fk_5408380')->references('id')->on('ada_apps')->onDelete('cascade');
            $table->unsignedBigInteger('status_app_id');
            $table->foreign('status_app_id', 'status_app_id_fk_5408380')->references('id')->on('status_apps')->onDelete('cascade');
        });
    }
}
