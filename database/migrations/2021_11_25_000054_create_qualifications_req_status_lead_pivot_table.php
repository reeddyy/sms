<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQualificationsReqStatusLeadPivotTable extends Migration
{
    public function up()
    {
        Schema::create('qualifications_req_status_lead', function (Blueprint $table) {
            $table->unsignedBigInteger('qualifications_req_id');
            $table->foreign('qualifications_req_id', 'qualifications_req_id_fk_5416866')->references('id')->on('qualifications_reqs')->onDelete('cascade');
            $table->unsignedBigInteger('status_lead_id');
            $table->foreign('status_lead_id', 'status_lead_id_fk_5416866')->references('id')->on('status_leads')->onDelete('cascade');
        });
    }
}
