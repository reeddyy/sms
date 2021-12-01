<?php

namespace App\Http\Requests;

use App\Models\AdmissionsEdp;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreAdmissionsEdpRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('admissions_edp_create');
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
            'edp_title_id' => [
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
            'admission_no' => [
                'string',
                'required',
                'unique:admissions_edps',
            ],
            'company_sponsored' => [
                'required',
            ],
        ];
    }
}
