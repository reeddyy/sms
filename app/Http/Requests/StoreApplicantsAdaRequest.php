<?php

namespace App\Http\Requests;

use App\Models\ApplicantsAda;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreApplicantsAdaRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('applicants_ada_create');
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
            'award_name_id' => [
                'required',
                'integer',
            ],
            'validity_start' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'validity_end' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'ada_no' => [
                'string',
                'required',
                'unique:applicants_adas',
            ],
            'applicant_name_id' => [
                'required',
                'integer',
            ],
            'payment_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'invoice_no' => [
                'string',
                'nullable',
            ],
        ];
    }
}
