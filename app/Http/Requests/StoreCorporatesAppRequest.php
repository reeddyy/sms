<?php

namespace App\Http\Requests;

use App\Models\CorporatesApp;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCorporatesAppRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('corporates_app_create');
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
                'required',
                'unique:corporates_apps',
            ],
            'member_class' => [
                'string',
                'nullable',
            ],
            'company_name' => [
                'string',
                'nullable',
            ],
            'business_reg_no' => [
                'string',
                'nullable',
            ],
            'company_address' => [
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
            'company_tel_no' => [
                'string',
                'nullable',
            ],
            'company_website' => [
                'string',
                'nullable',
            ],
            'company_type' => [
                'string',
                'nullable',
            ],
            'industry_type' => [
                'string',
                'nullable',
            ],
            'no_employees' => [
                'string',
                'nullable',
            ],
            'annual_turnover' => [
                'string',
                'nullable',
            ],
            'title_1' => [
                'string',
                'nullable',
            ],
            'name_1' => [
                'string',
                'nullable',
            ],
            'designation_1' => [
                'string',
                'nullable',
            ],
            'office_no_1' => [
                'string',
                'nullable',
            ],
            'mobile_no_1' => [
                'string',
                'nullable',
            ],
            'title_2' => [
                'string',
                'nullable',
            ],
            'name_2' => [
                'string',
                'nullable',
            ],
            'designation_2' => [
                'string',
                'nullable',
            ],
            'office_no_2' => [
                'string',
                'nullable',
            ],
            'mobile_no_2' => [
                'string',
                'nullable',
            ],
            'name_3' => [
                'string',
                'nullable',
            ],
            'name_4' => [
                'string',
                'nullable',
            ],
            'name_5' => [
                'string',
                'nullable',
            ],
            'business_profile' => [
                'string',
                'nullable',
            ],
            'others' => [
                'string',
                'nullable',
            ],
            'title' => [
                'string',
                'nullable',
            ],
            'applicant_name' => [
                'string',
                'nullable',
            ],
            'designation' => [
                'string',
                'nullable',
            ],
            'office_no' => [
                'string',
                'nullable',
            ],
            'mobile_no' => [
                'string',
                'nullable',
            ],
            'hear_about_us' => [
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
