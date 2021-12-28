<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEdpAppsTable extends Migration
{
    public function up()
    {
        Schema::create('edp_apps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('application_no');
            $table->string('sponsorship')->nullable();
            $table->integer('no_participants')->nullable();
            $table->string('level')->nullable();
            $table->string('programme')->nullable();
            $table->string('commencement')->nullable();
            $table->string('hear_about_us')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_address')->nullable();
            $table->string('country')->nullable();
            $table->integer('postal_code')->nullable();
            $table->string('officer_name')->nullable();
            $table->string('officer_designation')->nullable();
            $table->string('officer_contact')->nullable();
            $table->string('officer_email')->nullable();
            $table->string('participant_name_1')->nullable();
            $table->string('gender_1')->nullable();
            $table->string('id_no_1')->nullable();
            $table->string('designation_1')->nullable();
            $table->decimal('duration_1', 15, 1)->nullable();
            $table->string('contact_no_1')->nullable();
            $table->string('email_1')->nullable();
            $table->string('special_dietary_1')->nullable();
            $table->string('participant_name_2')->nullable();
            $table->string('gender_2')->nullable();
            $table->string('id_no_2')->nullable();
            $table->string('designation_2')->nullable();
            $table->decimal('duration_2', 15, 1)->nullable();
            $table->string('contact_no_2')->nullable();
            $table->string('email_2')->nullable();
            $table->string('special_dietary_2')->nullable();
            $table->string('participant_name_3')->nullable();
            $table->string('gender_3')->nullable();
            $table->string('id_no_3')->nullable();
            $table->string('designation_3')->nullable();
            $table->decimal('duration_3', 15, 1)->nullable();
            $table->string('contact_no_3')->nullable();
            $table->string('email_3')->nullable();
            $table->string('special_dietary_3')->nullable();
            $table->string('participant_name_4')->nullable();
            $table->string('gender_4')->nullable();
            $table->string('id_no_4')->nullable();
            $table->string('designation_4')->nullable();
            $table->decimal('duration_4', 15, 1)->nullable();
            $table->string('contact_no_4')->nullable();
            $table->string('email_4')->nullable();
            $table->string('special_dietary_4')->nullable();
            $table->string('participant_name_5')->nullable();
            $table->string('gender_5')->nullable();
            $table->string('id_no_5')->nullable();
            $table->string('designation_5')->nullable();
            $table->decimal('duration_5', 15, 1)->nullable();
            $table->string('contact_no_5')->nullable();
            $table->string('email_5')->nullable();
            $table->string('special_dietary_5')->nullable();
            $table->longText('note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
