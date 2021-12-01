<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionsEdpStatusEdpPivotTable extends Migration
{
    public function up()
    {
        Schema::create('admissions_edp_status_edp', function (Blueprint $table) {
            $table->unsignedBigInteger('admissions_edp_id');
            $table->foreign('admissions_edp_id', 'admissions_edp_id_fk_5461101')->references('id')->on('admissions_edps')->onDelete('cascade');
            $table->unsignedBigInteger('status_edp_id');
            $table->foreign('status_edp_id', 'status_edp_id_fk_5461101')->references('id')->on('status_edps')->onDelete('cascade');
        });
    }
}
