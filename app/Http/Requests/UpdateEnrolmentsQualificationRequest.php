<?php

namespace App\Http\Requests;

use App\Models\EnrolmentsQualification;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateEnrolmentsQualificationRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('enrolments_qualification_edit');
    }

    public function rules()
    {
        return [
            'enrolment_status_id' => [
                'required',
                'integer',
            ],
            'enrolment_no' => [
                'string',
                'required',
                'unique:enrolments_qualifications,enrolment_no,' . request()->route('enrolments_qualification')->id,
            ],
            'student_name_id' => [
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
            'company_sponsored' => [
                'required',
            ],
            'result_points' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
