<?php

namespace App\Http\Requests;

use App\Models\Certificate;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCertificateRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('certificate_create');
    }

    public function rules()
    {
        return [
            'credential_reference' => [
                'string',
                'required',
                'unique:certificates',
            ],
            'award_name' => [
                'string',
                'required',
            ],
            'recipient_name_id' => [
                'required',
                'integer',
            ],
            'date_awarded' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'awarded_by' => [
                'string',
                'nullable',
            ],
        ];
    }
}
