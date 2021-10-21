<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToMembershipsCorporatesTable extends Migration
{
    public function up()
    {
        Schema::table('memberships_corporates', function (Blueprint $table) {
            $table->unsignedBigInteger('member_status_id');
            $table->foreign('member_status_id', 'member_status_fk_5158182')->references('id')->on('statuses');
            $table->unsignedBigInteger('member_class_id');
            $table->foreign('member_class_id', 'member_class_fk_5158183')->references('id')->on('member_classes');
            $table->unsignedBigInteger('company_name_id');
            $table->foreign('company_name_id', 'company_name_fk_5158186')->references('id')->on('corporates');
        });
    }
}
