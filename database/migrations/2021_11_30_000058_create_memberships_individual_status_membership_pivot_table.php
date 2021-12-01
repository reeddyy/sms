<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipsIndividualStatusMembershipPivotTable extends Migration
{
    public function up()
    {
        Schema::create('memberships_individual_status_membership', function (Blueprint $table) {
            $table->unsignedBigInteger('memberships_individual_id');
            $table->foreign('memberships_individual_id', 'memberships_individual_id_fk_5460223')->references('id')->on('memberships_individuals')->onDelete('cascade');
            $table->unsignedBigInteger('status_membership_id');
            $table->foreign('status_membership_id', 'status_membership_id_fk_5460223')->references('id')->on('status_memberships')->onDelete('cascade');
        });
    }
}
