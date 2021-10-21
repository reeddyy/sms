<?php

namespace App\Http\Requests;

use App\Models\CreditsFundsPurpose;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCreditsFundsPurposeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('credits_funds_purpose_edit');
    }

    public function rules()
    {
        return [
            'purpose_name' => [
                'string',
                'required',
                'unique:credits_funds_purposes,purpose_name,' . request()->route('credits_funds_purpose')->id,
            ],
        ];
    }
}
