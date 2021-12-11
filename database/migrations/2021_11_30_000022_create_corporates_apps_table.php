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
            $table->string('company_tel_no')->nullable();
            $table->string('company_website')->nullable();
            $table->string('company_type')->nullable();
            $table->string('industry_type')->nullable();
            $table->string('no_employees')->nullable();
            $table->string('annual_turnover')->nullable();
            $table->string('title_1')->nullable();
            $table->string('name_1')->nullable();
            $table->string('designation_1')->nullable();
            $table->string('email_1')->nullable();
            $table->string('office_no_1')->nullable();
            $table->string('mobile_no_1')->nullable();
            $table->string('title_2')->nullable();
            $table->string('name_2')->nullable();
            $table->string('designation_2')->nullable();
            $table->string('email_2')->nullable();
            $table->string('office_no_2')->nullable();
            $table->string('mobile_no_2')->nullable();
            $table->string('name_3')->nullable();
            $table->string('email_3')->nullable();
            $table->string('name_4')->nullable();
            $table->string('email_4')->nullable();
            $table->string('name_5')->nullable();
            $table->string('email_5')->nullable();
            $table->string('business_profile')->nullable();
            $table->string('cold_chain')->nullable();
            $table->string('contract_law')->nullable();
            $table->boolean('cost_price_analysis')->default(0)->nullable();
            $table->boolean('delivery_and_last_mile')->default(0)->nullable();
            $table->boolean('digital_technologies')->default(0)->nullable();
            $table->boolean('integrated_logistics')->default(0)->nullable();
            $table->boolean('inventory')->default(0)->nullable();
            $table->boolean('lean_six_sigma')->default(0)->nullable();
            $table->boolean('negotiation')->default(0)->nullable();
            $table->boolean('performance_evaluation')->default(0)->nullable();
            $table->boolean('professional_networking')->default(0)->nullable();
            $table->boolean('shipping_and_freight')->default(0)->nullable();
            $table->boolean('sourcing')->default(0)->nullable();
            $table->boolean('supply_chain_management')->default(0)->nullable();
            $table->boolean('tender_and_contract')->default(0)->nullable();
            $table->boolean('transportation')->default(0)->nullable();
            $table->boolean('warehousing')->default(0)->nullable();
            $table->string('others')->nullable();
            $table->string('title')->nullable();
            $table->string('applicant_name')->nullable();
            $table->string('designation')->nullable();
            $table->string('email')->nullable();
            $table->string('office_no')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('hear_about_us')->nullable();
            $table->string('priority_code')->nullable();
            $table->longText('note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
