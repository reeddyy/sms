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
            'award_name' => [
                'string',
                'required',
            ],
            'awarded_by' => [
                'string',
                'nullable',
            ],
            'date_awarded' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'date_printed' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'recipient_name_id' => [
                'required',
                'integer',
            ],
            'credential_reference' => [
                'string',
                'required',
                'unique:certificates',
            ],
        ];
    }
}
