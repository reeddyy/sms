<?php

namespace App\Http\Requests;

use App\Models\MembershipsIndividual;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreMembershipsIndividualRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('memberships_individual_create');
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
                'unique:memberships_individuals',
            ],
            'member_name_id' => [
                'required',
                'integer',
            ],
            'admission_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
        ];
    }
}
