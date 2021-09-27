<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToAdmissionsEdpsTable extends Migration
{
    public function up()
    {
        Schema::table('admissions_edps', function (Blueprint $table) {
            $table->unsignedBigInteger('admission_status_id');
            $table->foreign('admission_status_id', 'admission_status_fk_4949860')->references('id')->on('statuses');
            $table->unsignedBigInteger('edp_title_id');
            $table->foreign('edp_title_id', 'edp_title_fk_4949861')->references('id')->on('programmes');
            $table->unsignedBigInteger('facilitator_name_id')->nullable();
            $table->foreign('facilitator_name_id', 'facilitator_name_fk_4949864')->references('id')->on('facilitators');
            $table->unsignedBigInteger('venue_id')->nullable();
            $table->foreign('venue_id', 'venue_fk_4949865')->references('id')->on('venues');
            $table->unsignedBigInteger('participant_name_id')->nullable();
            $table->foreign('participant_name_id', 'participant_name_fk_4949867')->references('id')->on('individuals');
            $table->unsignedBigInteger('officer_name_id')->nullable();
            $table->foreign('officer_name_id', 'officer_name_fk_4949869')->references('id')->on('officers');
        });
    }
}
