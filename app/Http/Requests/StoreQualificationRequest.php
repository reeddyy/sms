<?php

namespace App\Http\Requests;

use App\Models\Qualification;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreQualificationRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('qualification_create');
    }

    public function rules()
    {
        return [
            'student_name_id' => [
                'required',
                'integer',
            ],
            'course_name_id' => [
                'required',
                'integer',
            ],
            'course_start_date' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'course_end_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'enrolment_status' => [
                'required',
            ],
            'company_sponsored' => [
                'required',
            ],
            'company_name' => [
                'string',
                'nullable',
            ],
            'company_address_line_1' => [
                'string',
                'nullable',
            ],
            'company_address_line_2' => [
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
            'officer_in_charge_name' => [
                'string',
                'nullable',
            ],
            'officer_designation' => [
                'string',
                'nullable',
            ],
            'officer_contact_no' => [
                'string',
                'nullable',
            ],
            'ssg_claim_no' => [
                'string',
                'nullable',
            ],
            'ssg_payment_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'ssg_receipt_no' => [
                'string',
                'nullable',
            ],
            'payment_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'receipt_no' => [
                'string',
                'nullable',
            ],
        ];
    }
}
