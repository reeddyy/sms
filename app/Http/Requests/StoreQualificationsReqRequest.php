<?php

namespace App\Http\Requests;

use App\Models\QualificationsReq;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreQualificationsReqRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('qualifications_req_create');
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
            'course' => [
                'string',
                'nullable',
            ],
            'level' => [
                'string',
                'nullable',
            ],
            'hear_about_us' => [
                'string',
                'nullable',
            ],
            'name' => [
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
            'company_name' => [
                'string',
                'nullable',
            ],
            'industry' => [
                'string',
                'nullable',
            ],
            'contact_no' => [
                'string',
                'nullable',
            ],
        ];
    }
}
