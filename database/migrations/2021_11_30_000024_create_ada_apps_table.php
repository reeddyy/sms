<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdaAppsTable extends Migration
{
    public function up()
    {
        Schema::create('ada_apps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('application_no')->unique();
            $table->string('award_name')->nullable();
            $table->string('hear_about_us')->nullable();
            $table->string('title')->nullable();
            $table->string('name')->nullable();
            $table->string('id_no')->nullable();
            $table->string('gender')->nullable();
            $table->date('dob')->nullable();
            $table->string('nationality')->nullable();
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->integer('postal_code')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('email')->nullable();
            $table->string('company_name_1')->nullable();
            $table->string('designation_1')->nullable();
            $table->decimal('duration_1')->nullable();
            $table->string('country_1')->nullable();
            $table->string('company_name_2')->nullable();
            $table->string('designation_2')->nullable();
            $table->decimal('duration_2')->nullable();
            $table->string('country_2')->nullable();
            $table->string('company_name_3')->nullable();
            $table->string('designation_3')->nullable();
            $table->decimal('duration_3')->nullable();
            $table->string('country_3')->nullable();
            $table->string('programme_1')->nullable();
            $table->string('certificate_no_1')->nullable();
            $table->date('date_awarded_1')->nullable();
            $table->string('certificate_1')->nullable();
            $table->string('programme_2')->nullable();
            $table->string('certificate_no_2')->nullable();
            $table->date('date_awarded_2')->nullable();
            $table->string('certificate_2')->nullable();
            $table->string('programme_3')->nullable();
            $table->string('certificate_no_3')->nullable();
            $table->date('date_awarded_3')->nullable();
            $table->string('certificate_3')->nullable();
            $table->longText('note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
