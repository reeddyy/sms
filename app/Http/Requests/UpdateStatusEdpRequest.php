<?php

namespace App\Http\Requests;

use App\Models\StatusEdp;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateStatusEdpRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('status_edp_edit');
    }

    public function rules()
    {
        return [
            'status_name' => [
                'string',
                'required',
                'unique:status_edps,status_name,' . request()->route('status_edp')->id,
            ],
        ];
    }
}
