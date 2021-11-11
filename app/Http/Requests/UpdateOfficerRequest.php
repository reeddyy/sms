<?php

namespace App\Http\Requests;

use App\Models\Officer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateOfficerRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('officer_edit');
    }

    public function rules()
    {
        return [
            'officer_name' => [
                'string',
                'required',
            ],
            'officer_designation' => [
                'string',
                'nullable',
            ],
            'officer_email_address' => [
                'required',
                'unique:officers,officer_email_address,' . request()->route('officer')->id,
            ],
            'officer_contact_no' => [
                'string',
                'nullable',
            ],
            'company_name' => [
                'string',
                'nullable',
            ],
            'company_address' => [
                'string',
                'nullable',
            ],
            'unit_no' => [
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
            'hear_about_us' => [
                'string',
                'nullable',
            ],
        ];
    }
}
