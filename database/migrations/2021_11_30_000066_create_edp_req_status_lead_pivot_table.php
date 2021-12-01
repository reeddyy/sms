<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEdpReqStatusLeadPivotTable extends Migration
{
    public function up()
    {
        Schema::create('edp_req_status_lead', function (Blueprint $table) {
            $table->unsignedBigInteger('edp_req_id');
            $table->foreign('edp_req_id', 'edp_req_id_fk_5416955')->references('id')->on('edp_reqs')->onDelete('cascade');
            $table->unsignedBigInteger('status_lead_id');
            $table->foreign('status_lead_id', 'status_lead_id_fk_5416955')->references('id')->on('status_leads')->onDelete('cascade');
        });
    }
}
