<?php

namespace App\Http\Requests;

use App\Models\Award;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreAwardRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('award_create');
    }

    public function rules()
    {
        return [
            'award_name' => [
                'string',
                'required',
                'unique:awards',
            ],
            'award_abbr' => [
                'string',
                'nullable',
            ],
            'validity_year' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
