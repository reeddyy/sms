<?php

namespace App\Http\Requests;

use App\Models\Course;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCourseRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('course_edit');
    }

    public function rules()
    {
        return [
            'course_title' => [
                'string',
                'required',
                'unique:courses,course_title,' . request()->route('course')->id,
            ],
            'course_abbr' => [
                'string',
                'required',
                'unique:courses,course_abbr,' . request()->route('course')->id,
            ],
            'module_s.*' => [
                'integer',
            ],
            'module_s' => [
                'array',
            ],
            'classes.*' => [
                'integer',
            ],
            'classes' => [
                'array',
            ],
            'no_of_instalment' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'due_day_s_1st' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'due_day_s_2nd' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'due_day_s_3rd' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'course_status' => [
                'required',
            ],
        ];
    }
}
