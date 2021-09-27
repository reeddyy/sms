<?php

namespace App\Http\Requests;

use App\Models\ApplicantsAda;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateApplicantsAdaRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('applicants_ada_edit');
    }

    public function rules()
    {
        return [
            'ada_status_id' => [
                'required',
                'integer',
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
                'unique:applicants_adas,ada_no,' . request()->route('applicants_ada')->id,
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
