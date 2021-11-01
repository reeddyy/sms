<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorporatesTable extends Migration
{
    public function up()
    {
        Schema::create('corporates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_name');
            $table->string('business_reg_no')->unique();
            $table->string('company_address')->nullable();
            $table->string('unit_no')->nullable();
            $table->string('country')->nullable();
            $table->integer('postal_code')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('website')->nullable();
            $table->string('company_type')->nullable();
            $table->string('industry_type')->nullable();
            $table->string('employees_no')->nullable();
            $table->string('annual_turnover')->nullable();
            $table->string('title_1')->nullable();
            $table->string('name_1')->nullable();
            $table->string('designation_1')->nullable();
            $table->string('email_address_1')->nullable();
            $table->string('office_no_1')->nullable();
            $table->string('mobile_no_1')->nullable();
            $table->string('title_2')->nullable();
            $table->string('name_2')->nullable();
            $table->string('designation_2')->nullable();
            $table->string('email_address_2')->nullable();
            $table->string('office_no_2')->nullable();
            $table->string('mobile_no_2')->nullable();
            $table->string('name_3')->nullable();
            $table->string('email_address_3')->nullable();
            $table->string('name_4')->nullable();
            $table->string('email_address_4')->nullable();
            $table->string('name_5')->nullable();
            $table->string('email_address_5')->nullable();
            $table->string('title')->nullable();
            $table->string('applicant_name')->nullable();
            $table->string('designation')->nullable();
            $table->string('email_address')->nullable();
            $table->string('office_no')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('hear_about_us')->nullable();
            $table->longText('note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
