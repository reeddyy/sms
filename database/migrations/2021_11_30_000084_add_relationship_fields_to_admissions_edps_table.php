<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToAdmissionsEdpsTable extends Migration
{
    public function up()
    {
        Schema::table('admissions_edps', function (Blueprint $table) {
            $table->unsignedBigInteger('application_no_id')->nullable();
            $table->foreign('application_no_id', 'application_no_fk_5461102')->references('id')->on('edp_apps');
            $table->unsignedBigInteger('edp_title_id');
            $table->foreign('edp_title_id', 'edp_title_fk_5158064')->references('id')->on('programmes');
            $table->unsignedBigInteger('facilitator_name_id')->nullable();
            $table->foreign('facilitator_name_id', 'facilitator_name_fk_5158067')->references('id')->on('facilitators');
            $table->unsignedBigInteger('venue_id')->nullable();
            $table->foreign('venue_id', 'venue_fk_5158068')->references('id')->on('venues');
            $table->unsignedBigInteger('participant_name_id')->nullable();
            $table->foreign('participant_name_id', 'participant_name_fk_5158070')->references('id')->on('individuals');
            $table->unsignedBigInteger('officer_name_id')->nullable();
            $table->foreign('officer_name_id', 'officer_name_fk_5158072')->references('id')->on('officers');
        });
    }
}
