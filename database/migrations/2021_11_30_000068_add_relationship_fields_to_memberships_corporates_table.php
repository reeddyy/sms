<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToMembershipsCorporatesTable extends Migration
{
    public function up()
    {
        Schema::table('memberships_corporates', function (Blueprint $table) {
            $table->unsignedBigInteger('application_no_id')->nullable();
            $table->foreign('application_no_id', 'application_no_fk_5460222')->references('id')->on('corporates_apps');
            $table->unsignedBigInteger('member_class_id');
            $table->foreign('member_class_id', 'member_class_fk_5158183')->references('id')->on('member_classes');
            $table->unsignedBigInteger('company_name_id');
            $table->foreign('company_name_id', 'company_name_fk_5158186')->references('id')->on('corporates');
        });
    }
}
