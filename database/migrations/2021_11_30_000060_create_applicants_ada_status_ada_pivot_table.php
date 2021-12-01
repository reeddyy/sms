<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantsAdaStatusAdaPivotTable extends Migration
{
    public function up()
    {
        Schema::create('applicants_ada_status_ada', function (Blueprint $table) {
            $table->unsignedBigInteger('applicants_ada_id');
            $table->foreign('applicants_ada_id', 'applicants_ada_id_fk_5461103')->references('id')->on('applicants_adas')->onDelete('cascade');
            $table->unsignedBigInteger('status_ada_id');
            $table->foreign('status_ada_id', 'status_ada_id_fk_5461103')->references('id')->on('status_adas')->onDelete('cascade');
        });
    }
}
