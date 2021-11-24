<?php

namespace App\Http\Requests;

use App\Models\StatusQualification;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateStatusQualificationRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('status_qualification_edit');
    }

    public function rules()
    {
        return [
            'status_name' => [
                'string',
                'required',
                'unique:status_qualifications,status_name,' . request()->route('status_qualification')->id,
            ],
        ];
    }
}
