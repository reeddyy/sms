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
            $table->string('duration')->nullable();
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
            $table->string('cold_chain')->nullable();
            $table->string('contract_law')->nullable();
            $table->string('cost_price_analysis')->nullable();
            $table->string('delivery_and_last_mile')->nullable();
            $table->string('digital_technologies')->nullable();
            $table->string('integrated_logistics')->nullable();
            $table->string('inventory')->nullable();
            $table->string('lean_six_sigma')->nullable();
            $table->string('negotiation')->nullable();
            $table->string('performance_evaluation')->nullable();
            $table->string('professional_networking')->nullable();
            $table->string('shipping_and_freight')->nullable();
            $table->string('sourcing')->nullable();
            $table->string('supply_chain_management')->nullable();
            $table->string('tender_and_contract')->nullable();
            $table->string('transportation')->nullable();
            $table->string('warehousing')->nullable();
            $table->string('others')->nullable();
            $table->string('priority_code')->nullable();
            $table->longText('note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
