<?php

namespace App\Http\Requests;

use App\Models\StatusAda;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreStatusAdaRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('status_ada_create');
    }

    public function rules()
    {
        return [
            'status_name' => [
                'string',
                'required',
                'unique:status_adas',
            ],
        ];
    }
}
