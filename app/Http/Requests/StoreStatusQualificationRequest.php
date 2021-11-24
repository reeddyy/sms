<?php

namespace App\Http\Requests;

use App\Models\StatusQualification;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreStatusQualificationRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('status_qualification_create');
    }

    public function rules()
    {
        return [
            'status_name' => [
                'string',
                'required',
                'unique:status_qualifications',
            ],
        ];
    }
}
