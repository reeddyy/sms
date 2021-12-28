<?php

namespace App\Http\Requests;

use App\Models\IndividualsApp;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreIndividualsAppRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('individuals_app_create');
    }

    public function rules()
    {
        return [
            'statuses.*' => [
                'integer',
            ],
            'statuses' => [
                'array',
            ],
            'application_no' => [
                'string',
                'unique:individuals_apps',
            ],
            'member_class' => [
                'string',
                'nullable',
            ],
            'title' => [
                'string',
                'nullable',
            ],
            'name' => [
                'string',
                'nullable',
            ],
            'id_no' => [
                'string',
                'nullable',
            ],
            'gender' => [
                'string',
                'nullable',
            ],
            'dob' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'nationality' => [
                'string',
                'nullable',
            ],
            'address' => [
                'string',
                'nullable',
            ],
            'country' => [
                'string',
                'nullable',
            ],
            'postal_code' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'contact_no' => [
                'string',
                'nullable',
            ],
            'lps_exp' => [
                'string',
                'nullable',
            ],
            'hear_about_us' => [
                'string',
                'nullable',
            ],
            'company_name' => [
                'string',
                'nullable',
            ],
            'designation' => [
                'string',
                'nullable',
            ],
            'job_function' => [
                'string',
                'nullable',
            ],
            'industry_type' => [
                'string',
                'nullable',
            ],
            'company_address' => [
                'string',
                'nullable',
            ],
            'country_1' => [
                'string',
                'nullable',
            ],
            'postal_code_1' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'qualification' => [
                'string',
                'nullable',
            ],
            'level' => [
                'string',
                'nullable',
            ],
            'institute' => [
                'string',
                'nullable',
            ],
            'year_attained' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'id_front' => [
                'string',
                'nullable',
            ],
            'id_back' => [
                'string',
                'nullable',
            ],
            'certificate' => [
                'string',
                'nullable',
            ],
             'cold_chain' => [
                'string',
                'nullable',
            ],
            'contract_law' => [
                'string',
                'nullable',
            ],
            'cost_price_analysis' => [
                'string',
                'nullable',
            ],
            'delivery_and_last_mile' => [
                'string',
                'nullable',
            ],
            'digital_technologies' => [
                'string',
                'nullable',
            ],
            'integrated_logistics' => [
                'string',
                'nullable',
            ],
            'inventory' => [
                'string',
                'nullable',
            ],
            'lean_six_sigma' => [
                'string',
                'nullable',
            ],
            'negotiation' => [
                'string',
                'nullable',
            ],
            'performance_evaluation' => [
                'string',
                'nullable',
            ],
            'professional_networking' => [
                'string',
                'nullable',
            ],
            'shipping_and_freight' => [
                'string',
                'nullable',
            ],
            'sourcing' => [
                'string',
                'nullable',
            ],
            'supply_chain_management' => [
                'string',
                'nullable',
            ],
            'tender_and_contract' => [
                'string',
                'nullable',
            ],
            'transportation' => [
                'string',
                'nullable',
            ],
            'warehousing' => [
                'string',
                'nullable',
            ],
            'others' => [
                'string',
                'nullable',
            ],
            'priority_code' => [
                'string',
                'nullable',
            ],
        ];
    }
}
