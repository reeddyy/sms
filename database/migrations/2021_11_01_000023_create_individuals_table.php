<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndividualsTable extends Migration
{
    public function up()
    {
        Schema::create('individuals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->string('name');
            $table->string('id_type')->nullable();
            $table->string('id_no')->unique();
            $table->string('gender')->nullable();
            $table->date('dob')->nullable();
            $table->integer('age')->nullable();
            $table->string('nationality')->nullable();
            $table->string('residential_address')->nullable();
            $table->string('unit_no')->nullable();
            $table->string('country')->nullable();
            $table->integer('postal_code')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('email_address');
            $table->string('company_name_1')->nullable();
            $table->string('job_designation_1')->nullable();
            $table->integer('duration_of_year_s_1')->nullable();
            $table->string('company_name_2')->nullable();
            $table->string('job_designation_2')->nullable();
            $table->integer('duration_of_year_s_2')->nullable();
            $table->string('company_name_3')->nullable();
            $table->string('job_designation_3')->nullable();
            $table->integer('duration_of_year_s_3')->nullable();
            $table->integer('total_year_s_related_work_exp')->nullable();
            $table->string('qual_title_1')->nullable();
            $table->string('qual_level_1')->nullable();
            $table->string('institute_name_1')->nullable();
            $table->integer('year_attained_1')->nullable();
            $table->string('qual_title_2')->nullable();
            $table->string('qual_level_2')->nullable();
            $table->string('institute_name_2')->nullable();
            $table->integer('year_attained_2')->nullable();
            $table->string('qual_title_3')->nullable();
            $table->string('qual_level_3')->nullable();
            $table->string('institute_name_3')->nullable();
            $table->string('year_attained_3')->nullable();
            $table->string('special_dietary')->nullable();
            $table->string('hear_about_us')->nullable();
            $table->longText('note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
