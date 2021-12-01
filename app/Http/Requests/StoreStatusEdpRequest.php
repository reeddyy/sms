<?php

namespace App\Http\Requests;

use App\Models\StatusEdp;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreStatusEdpRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('status_edp_create');
    }

    public function rules()
    {
        return [
            'status_name' => [
                'string',
                'required',
                'unique:status_edps',
            ],
        ];
    }
}
