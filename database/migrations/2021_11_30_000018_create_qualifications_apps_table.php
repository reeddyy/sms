<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQualificationsAppsTable extends Migration
{
    public function up()
    {
        Schema::create('qualifications_apps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('application_no')->unique();
            $table->string('sponsorship')->nullable();
            $table->string('level')->nullable();
            $table->string('course')->nullable();
            $table->string('commencement')->nullable();
            $table->string('hear_about_us')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_address')->nullable();
            $table->string('company_country')->nullable();
            $table->integer('company_postal_code')->nullable();
            $table->string('officer_name')->nullable();
            $table->string('officer_designation')->nullable();
            $table->string('officer_contact')->nullable();
            $table->string('officer_email')->nullable();
            $table->string('applicant_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('id_type')->nullable();
            $table->string('id_no')->nullable();
            $table->date('dob')->nullable();
            $table->string('nationality')->nullable();
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->integer('postal_code')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('email')->nullable();
            $table->string('company_name_1')->nullable();
            $table->string('designation_1')->nullable();
            $table->decimal('duration_1', 15, 1)->nullable();
            $table->string('company_name_2')->nullable();
            $table->string('designation_2')->nullable();
            $table->decimal('duration_2', 15, 1)->nullable();
            $table->string('company_name_3')->nullable();
            $table->string('designation_3')->nullable();
            $table->decimal('duration_3', 15, 1)->nullable();
            $table->string('qualification_1')->nullable();
            $table->string('level_1')->nullable();
            $table->string('institute_1')->nullable();
            $table->integer('year_attained_1')->nullable();
            $table->string('qualification_2')->nullable();
            $table->string('level_2')->nullable();
            $table->string('institute_2')->nullable();
            $table->integer('year_attained_2')->nullable();
            $table->string('qualification_3')->nullable();
            $table->string('level_3')->nullable();
            $table->string('institute_3')->nullable();
            $table->integer('year_attained_3')->nullable();
            $table->string('id_front')->nullable();
            $table->string('id_back')->nullable();
            $table->string('certificate')->nullable();
            $table->longText('note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
