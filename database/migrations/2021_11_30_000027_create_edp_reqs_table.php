<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEdpReqsTable extends Migration
{
    public function up()
    {
        Schema::create('edp_reqs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('programme')->nullable();
            $table->string('level')->nullable();
            $table->string('hear_about_us')->nullable();
            $table->string('name')->nullable();
            $table->string('designation')->nullable();
            $table->string('job_function')->nullable();
            $table->string('company_name')->nullable();
            $table->string('industry')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('email')->nullable();
            $table->longText('note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
