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
                'required',
                'unique:individuals,nric_fin,' . request()->route('individual')->id,
            ],
            'email_address' => [
                'required',
            ],
        ];
    }
}
