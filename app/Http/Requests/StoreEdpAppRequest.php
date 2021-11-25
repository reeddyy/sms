<?php

namespace App\Http\Requests;

use App\Models\EdpApp;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreEdpAppRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('edp_app_create');
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
                'required',
            ],
            'sponsorship' => [
                'string',
                'nullable',
            ],
            'no_participants' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'level' => [
                'string',
                'nullable',
            ],
            'programme' => [
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
            'participant_name_1' => [
                'string',
                'nullable',
            ],
            'gender_1' => [
                'string',
                'nullable',
            ],
            'id_no_1' => [
                'string',
                'nullable',
            ],
            'designation_1' => [
                'string',
                'nullable',
            ],
            'duration_1' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'contact_no_1' => [
                'string',
                'nullable',
            ],
            'special_dietary_1' => [
                'string',
                'nullable',
            ],
            'participant_name_2' => [
                'string',
                'nullable',
            ],
            'gender_2' => [
                'string',
                'nullable',
            ],
            'id_no_2' => [
                'string',
                'nullable',
            ],
            'designation_2' => [
                'string',
                'nullable',
            ],
            'duration_2' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'contact_no_2' => [
                'string',
                'nullable',
            ],
            'special_dietary_2' => [
                'string',
                'nullable',
            ],
            'participant_name_3' => [
                'string',
                'nullable',
            ],
            'gender_3' => [
                'string',
                'nullable',
            ],
            'id_no_3' => [
                'string',
                'nullable',
            ],
            'designation_3' => [
                'string',
                'nullable',
            ],
            'duration_3' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'contact_no_3' => [
                'string',
                'nullable',
            ],
            'special_dietary_3' => [
                'string',
                'nullable',
            ],
            'participant_name_4' => [
                'string',
                'nullable',
            ],
            'gender_4' => [
                'string',
                'nullable',
            ],
            'id_no_4' => [
                'string',
                'nullable',
            ],
            'designation_4' => [
                'string',
                'nullable',
            ],
            'duration_4' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'contact_no_4' => [
                'string',
                'nullable',
            ],
            'special_dietary_4' => [
                'string',
                'nullable',
            ],
            'participant_name_5' => [
                'string',
                'nullable',
            ],
            'gender_5' => [
                'string',
                'nullable',
            ],
            'id_no_5' => [
                'string',
                'nullable',
            ],
            'designation_5' => [
                'string',
                'nullable',
            ],
            'duration_5' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'contact_no_5' => [
                'string',
                'nullable',
            ],
            'special_dietary_5' => [
                'string',
                'nullable',
            ],
        ];
    }
}
