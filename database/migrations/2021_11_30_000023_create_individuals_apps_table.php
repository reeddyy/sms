<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndividualsAppsTable extends Migration
{
    public function up()
    {
        Schema::create('individuals_apps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('application_no')->unique();
            $table->string('member_class')->nullable();
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
            $table->string('lps_exp')->nullable();
            $table->string('hear_about_us')->nullable();
            $table->string('company_name')->nullable();
            $table->string('designation')->nullable();
            $table->integer('duration')->nullable();
            $table->string('job_function')->nullable();
            $table->string('industry_type')->nullable();
            $table->string('company_address')->nullable();
            $table->string('country_1')->nullable();
            $table->integer('postal_code_1')->nullable();
            $table->string('qualification')->nullable();
            $table->string('level')->nullable();
            $table->string('institute')->nullable();
            $table->integer('year_attained')->nullable();
            $table->string('id_front')->nullable();
            $table->string('id_back')->nullable();
            $table->string('certificate')->nullable();
            $table->boolean('cold_chain')->default(0)->nullable();
            $table->boolean('performance_evaluation')->default(0)->nullable();
            $table->boolean('contract_law')->default(0)->nullable();
            $table->boolean('cost_price_analysis')->default(0)->nullable();
            $table->boolean('delivery_and_last_mile')->default(0)->nullable();
            $table->boolean('digital_technologies')->default(0)->nullable();
            $table->boolean('integrated_logistics')->default(0)->nullable();
            $table->boolean('inventory')->default(0)->nullable();
            $table->boolean('lean_six_sigma')->default(0)->nullable();
            $table->boolean('negotiation')->default(0)->nullable();
            $table->boolean('professional_networking')->default(0)->nullable();
            $table->boolean('shipping_and_freight')->default(0)->nullable();
            $table->boolean('sourcing')->default(0)->nullable();
            $table->boolean('supply_chain_management')->default(0)->nullable();
            $table->boolean('tender_and_contract')->default(0)->nullable();
            $table->boolean('transportation')->default(0)->nullable();
            $table->boolean('warehousing')->default(0)->nullable();
            $table->string('others')->nullable();
            $table->string('priority_code')->nullable();
            $table->longText('note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
