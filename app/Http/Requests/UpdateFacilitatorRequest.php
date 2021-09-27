<?php

namespace App\Http\Requests;

use App\Models\Facilitator;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateFacilitatorRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('facilitator_edit');
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
