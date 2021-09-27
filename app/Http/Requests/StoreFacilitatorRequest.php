<?php

namespace App\Http\Requests;

use App\Models\Facilitator;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreFacilitatorRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('facilitator_create');
    }

    public function rules()
    {
        return [
            'facilitator_name' => [
                'string',
                'required',
            ],
        ];
    }
}
