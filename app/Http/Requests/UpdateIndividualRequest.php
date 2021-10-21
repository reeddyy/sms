<?php

namespace App\Http\Requests;

use App\Models\Individual;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateIndividualRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('individual_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'nric_fin' => [
                'string',
                'nullable',
            ],
            'residential_address' => [
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
            'contact_no' => [
                'string',
                'nullable',
            ],
            'email_address' => [
                'required',
                'unique:individuals,email_address,' . request()->route('individual')->id,
            ],
            'company_name_1' => [
                'string',
                'nullable',
            ],
            'job_designation_1' => [
                'string',
                'nullable',
            ],
            'duration_of_year_s_1' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'company_name_2' => [
                'string',
                'nullable',
            ],
            'job_designation_2' => [
                'string',
                'nullable',
            ],
            'duration_of_year_s_2' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'company_name_3' => [
                'string',
                'nullable',
            ],
            'job_designation_3' => [
                'string',
                'nullable',
            ],
            'duration_of_year_s_3' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'total_year_s_related_work_exp' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'qual_title_1' => [
                'string',
                'nullable',
            ],
            'qual_level_1' => [
                'string',
                'nullable',
            ],
            'institute_name_1' => [
                'string',
                'nullable',
            ],
            'year_attained_1' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'qual_title_2' => [
                'string',
                'nullable',
            ],
            'qual_level_2' => [
                'string',
                'nullable',
            ],
            'institute_name_2' => [
                'string',
                'nullable',
            ],
            'year_attained_2' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'qual_title_3' => [
                'string',
                'nullable',
            ],
            'qual_level_3' => [
                'string',
                'nullable',
            ],
            'institute_name_3' => [
                'string',
                'nullable',
            ],
            'year_attained_3' => [
                'string',
                'nullable',
            ],
        ];
    }
}
