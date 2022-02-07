<?php

namespace App\Http\Requests;

use App\Models\QualificationsApp;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateQualificationsAppRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('qualifications_app_edit');
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
            'application_no' => [
                'string',
                'unique:qualifications_apps,application_no,' . request()->route('qualifications_app')->id,
            ],
            'sponsorship' => [
                'string',
                'nullable',
            ],
            'level' => [
                'string',
                'nullable',
            ],
            'course' => [
                'string',
                'nullable',
            ],
            'commencement' => [
                'string',
                'nullable',
            ],
            'hear_about_us' => [
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
            'company_country' => [
                'string',
                'nullable',
            ],
            'company_postal_code' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'officer_name' => [
                'string',
                'nullable',
            ],
            'officer_designation' => [
                'string',
                'nullable',
            ],
            'officer_contact' => [
                'string',
                'nullable',
            ],
            'applicant_name' => [
                'string',
                'nullable',
            ],
            'gender' => [
                'string',
                'nullable',
            ],
            'id_type' => [
                'string',
                'nullable',
            ],
            'id_no' => [
                'string',
                'nullable',
            ],
            'dob' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'nationality' => [
                'string',
                'nullable',
            ],
            'address' => [
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
            'contact_no' => [
                'string',
                'nullable',
            ],
            'company_name_1' => [
                'string',
                'nullable',
            ],
            'designation_1' => [
                'string',
                'nullable',
            ],
            'duration_1' => [
                'string',
                'nullable',
            ],
            'company_name_2' => [
                'string',
                'nullable',
            ],
            'designation_2' => [
                'string',
                'nullable',
            ],
            'duration_2' => [
                'string',
                'nullable',
            ],
            'company_name_3' => [
                'string',
                'nullable',
            ],
            'designation_3' => [
                'string',
                'nullable',
            ],
            'duration_3' => [
                'string',
                'nullable',
            ],
            'qualification_1' => [
                'string',
                'nullable',
            ],
            'level_1' => [
                'string',
                'nullable',
            ],
            'institute_1' => [
                'string',
                'nullable',
            ],
            'year_attained_1' => [
                'string',
                'nullable',
            ],
            'qualification_2' => [
                'string',
                'nullable',
            ],
            'level_2' => [
                'string',
                'nullable',
            ],
            'institute_2' => [
                'string',
                'nullable',
            ],
            'year_attained_2' => [
                'string',
                'nullable',
            ],
            'qualification_3' => [
                'string',
                'nullable',
            ],
            'level_3' => [
                'string',
                'nullable',
            ],
            'institute_3' => [
                'string',
                'nullable',
            ],
            'year_attained_3' => [
                'string',
                'nullable',
            ],
            'id_front' => [
                'string',
                'nullable',
            ],
            'id_back' => [
                'string',
                'nullable',
            ],
            'certificate' => [
                'string',
                'nullable',
            ],
        ];
    }
}
