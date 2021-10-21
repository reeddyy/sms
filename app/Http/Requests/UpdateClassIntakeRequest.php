<?php

namespace App\Http\Requests;

use App\Models\ClassIntake;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateClassIntakeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('class_intake_edit');
    }

    public function rules()
    {
        return [
            'class_name' => [
                'string',
                'required',
                'unique:class_intakes,class_name,' . request()->route('class_intake')->id,
            ],
        ];
    }
}
