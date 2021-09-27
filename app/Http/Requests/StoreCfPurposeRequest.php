<?php

namespace App\Http\Requests;

use App\Models\CfPurpose;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCfPurposeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('cf_purpose_create');
    }

    public function rules()
    {
        return [
            'purpose_name' => [
                'string',
                'required',
                'unique:cf_purposes',
            ],
        ];
    }
}
