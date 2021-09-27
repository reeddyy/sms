<?php

namespace App\Http\Requests;

use App\Models\Programme;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateProgrammeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('programme_edit');
    }

    public function rules()
    {
        return [
            'edp_title' => [
                'string',
                'required',
                'unique:programmes,edp_title,' . request()->route('programme')->id,
            ],
            'edp_abbr' => [
                'string',
                'nullable',
            ],
            'duration_day' => [
                'string',
                'nullable',
            ],
        ];
    }
}
