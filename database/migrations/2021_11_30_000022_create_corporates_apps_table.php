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
