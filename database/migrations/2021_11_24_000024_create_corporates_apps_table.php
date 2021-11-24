<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorporatesAppsTable extends Migration
{
    public function up()
    {
        Schema::create('corporates_apps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('application_no')->unique();
            $table->string('member_class')->nullable();
            $table->string('company_name')->nullable();
            $table->string('business_reg_no')->nullable();
            $table->string('company_address')->nullable();
            $table->string('country')->nullable();
            $table->integer('postal_code')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
