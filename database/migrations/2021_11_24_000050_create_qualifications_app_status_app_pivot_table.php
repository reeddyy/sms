<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQualificationsAppStatusAppPivotTable extends Migration
{
    public function up()
    {
        Schema::create('qualifications_app_status_app', function (Blueprint $table) {
            $table->unsignedBigInteger('qualifications_app_id');
            $table->foreign('qualifications_app_id', 'qualifications_app_id_fk_5390161')->references('id')->on('qualifications_apps')->onDelete('cascade');
            $table->unsignedBigInteger('status_app_id');
            $table->foreign('status_app_id', 'status_app_id_fk_5390161')->references('id')->on('status_apps')->onDelete('cascade');
        });
    }
}
