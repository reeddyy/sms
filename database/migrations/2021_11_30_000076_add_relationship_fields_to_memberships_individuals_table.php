<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToMembershipsIndividualsTable extends Migration
{
    public function up()
    {
        Schema::table('memberships_individuals', function (Blueprint $table) {
            $table->unsignedBigInteger('application_no_id')->nullable();
            $table->foreign('application_no_id', 'application_no_fk_5460224')->references('id')->on('individuals_apps');
            $table->unsignedBigInteger('member_class_id');
            $table->foreign('member_class_id', 'member_class_fk_5157934')->references('id')->on('member_classes');
            $table->unsignedBigInteger('member_name_id');
            $table->foreign('member_name_id', 'member_name_fk_5157942')->references('id')->on('individuals');
        });
    }
}
