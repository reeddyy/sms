<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficersTable extends Migration
{
    public function up()
    {
        Schema::create('officers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('officer_title')->nullable();
            $table->string('officer_name');
            $table->string('officer_designation')->nullable();
            $table->string('officer_email_address')->unique();
            $table->string('officer_contact_no')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_address')->nullable();
            $table->string('unit_no')->nullable();
            $table->string('country')->nullable();
            $table->integer('postal_code')->nullable();
            $table->string('hear_about_us')->nullable();
            $table->longText('note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
