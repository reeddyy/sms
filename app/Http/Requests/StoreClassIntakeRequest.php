<?php

namespace App\Http\Requests;

use App\Models\ClassIntake;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreClassIntakeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('class_intake_create');
    }

    public function rules()
    {
        return [
            'class_name' => [
                'string',
                'required',
                'unique:class_intakes',
            ],
        ];
    }
}
