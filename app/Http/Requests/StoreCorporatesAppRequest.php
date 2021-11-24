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
        ];
    }
}
