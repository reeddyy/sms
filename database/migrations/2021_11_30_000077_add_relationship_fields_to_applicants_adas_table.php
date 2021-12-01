<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToApplicantsAdasTable extends Migration
{
    public function up()
    {
        Schema::table('applicants_adas', function (Blueprint $table) {
            $table->unsignedBigInteger('application_no_id')->nullable();
            $table->foreign('application_no_id', 'application_no_fk_5461104')->references('id')->on('ada_apps');
            $table->unsignedBigInteger('award_name_id');
            $table->foreign('award_name_id', 'award_name_fk_5158104')->references('id')->on('awards');
            $table->unsignedBigInteger('applicant_name_id');
            $table->foreign('applicant_name_id', 'applicant_name_fk_5158110')->references('id')->on('individuals');
        });
    }
}
