<?php

namespace App\Http\Requests;

use App\Models\EnrolmentsQualification;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreEnrolmentsQualificationRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('enrolments_qualification_create');
    }

    public function rules()
    {
        return [
            'enrolment_status_id' => [
                'required',
                'integer',
            ],
            'course_title_id' => [
                'required',
                'integer',
            ],
            'start_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'end_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'classes.*' => [
                'integer',
            ],
            'classes' => [
                'array',
            ],
            'enrolment_no' => [
                'string',
                'required',
                'unique:enrolments_qualifications',
            ],
            'student_name_id' => [
                'required',
                'integer',
            ],
            'company_sponsored' => [
                'required',
            ],
        ];
    }
}
