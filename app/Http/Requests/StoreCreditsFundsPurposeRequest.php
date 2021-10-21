<?php

namespace App\Http\Requests;

use App\Models\CreditsFundsPurpose;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCreditsFundsPurposeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('credits_funds_purpose_create');
    }

    public function rules()
    {
        return [
            'purpose_name' => [
                'string',
                'required',
                'unique:credits_funds_purposes',
            ],
        ];
    }
}
