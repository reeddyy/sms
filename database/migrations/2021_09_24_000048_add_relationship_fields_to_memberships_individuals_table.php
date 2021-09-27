<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToMembershipsIndividualsTable extends Migration
{
    public function up()
    {
        Schema::table('memberships_individuals', function (Blueprint $table) {
            $table->unsignedBigInteger('member_status_id');
            $table->foreign('member_status_id', 'member_status_fk_4947701')->references('id')->on('statuses');
            $table->unsignedBigInteger('member_class_id');
            $table->foreign('member_class_id', 'member_class_fk_4947694')->references('id')->on('member_classes');
            $table->unsignedBigInteger('member_name_id');
            $table->foreign('member_name_id', 'member_name_fk_4947702')->references('id')->on('individuals');
        });
    }
}
