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
            'course_name' => [
                'string',
                'required',
                'unique:courses,course_name,' . request()->route('course')->id,
            ],
            'course_abbr' => [
                'string',
                'required',
                'unique:courses,course_abbr,' . request()->route('course')->id,
            ],
            'course_level' => [
                'required',
            ],
            'course_modules.*' => [
                'integer',
            ],
            'course_modules' => [
                'required',
                'array',
            ],
            'course_duration' => [
                'string',
                'nullable',
            ],
            'no_of_instalment' => [
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
