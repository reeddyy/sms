<?php

namespace App\Http\Requests;

use App\Models\Individual;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreIndividualRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('individual_create');
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
                'required',
                'unique:individuals',
            ],
            'email_address' => [
                'required',
            ],
        ];
    }
}
