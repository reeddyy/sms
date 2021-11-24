<?php

namespace App\Http\Requests;

use App\Models\StatusApp;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreStatusAppRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('status_app_create');
    }

    public function rules()
    {
        return [
            'status_name' => [
                'string',
                'required',
                'unique:status_apps',
            ],
        ];
    }
}
