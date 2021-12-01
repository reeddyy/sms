<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipsCorporateStatusMembershipPivotTable extends Migration
{
    public function up()
    {
        Schema::create('memberships_corporate_status_membership', function (Blueprint $table) {
            $table->unsignedBigInteger('memberships_corporate_id');
            $table->foreign('memberships_corporate_id', 'memberships_corporate_id_fk_5460221')->references('id')->on('memberships_corporates')->onDelete('cascade');
            $table->unsignedBigInteger('status_membership_id');
            $table->foreign('status_membership_id', 'status_membership_id_fk_5460221')->references('id')->on('status_memberships')->onDelete('cascade');
        });
    }
}
