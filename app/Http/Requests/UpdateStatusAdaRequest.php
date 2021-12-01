<?php

namespace App\Http\Requests;

use App\Models\StatusAda;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateStatusAdaRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('status_ada_edit');
    }

    public function rules()
    {
        return [
            'status_name' => [
                'string',
                'required',
                'unique:status_adas,status_name,' . request()->route('status_ada')->id,
            ],
        ];
    }
}
