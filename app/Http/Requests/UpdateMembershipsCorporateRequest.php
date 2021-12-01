<?php

namespace App\Http\Requests;

use App\Models\MembershipsCorporate;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateMembershipsCorporateRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('memberships_corporate_edit');
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
            'member_class_id' => [
                'required',
                'integer',
            ],
            'valid_from' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'valid_till' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'member_no' => [
                'string',
                'required',
                'unique:memberships_corporates,member_no,' . request()->route('memberships_corporate')->id,
            ],
            'company_name_id' => [
                'required',
                'integer',
            ],
            'support_funds.*' => [
                'integer',
            ],
            'support_funds' => [
                'array',
            ],
            'admission_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
        ];
    }
}
