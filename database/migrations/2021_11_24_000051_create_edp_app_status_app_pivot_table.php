<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEdpAppStatusAppPivotTable extends Migration
{
    public function up()
    {
        Schema::create('edp_app_status_app', function (Blueprint $table) {
            $table->unsignedBigInteger('edp_app_id');
            $table->foreign('edp_app_id', 'edp_app_id_fk_5405134')->references('id')->on('edp_apps')->onDelete('cascade');
            $table->unsignedBigInteger('status_app_id');
            $table->foreign('status_app_id', 'status_app_id_fk_5405134')->references('id')->on('status_apps')->onDelete('cascade');
        });
    }
}
