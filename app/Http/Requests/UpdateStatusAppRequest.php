<?php

namespace App\Http\Requests;

use App\Models\StatusApp;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateStatusAppRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('status_app_edit');
    }

    public function rules()
    {
        return [
            'status_name' => [
                'string',
                'required',
                'unique:status_apps,status_name,' . request()->route('status_app')->id,
            ],
        ];
    }
}
