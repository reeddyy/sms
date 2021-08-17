<?php

namespace App\Http\Requests;

use App\Models\Module;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateModuleRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('module_edit');
    }

    public function rules()
    {
        return [
            'module_name' => [
                'string',
                'required',
                'unique:modules,module_name,' . request()->route('module')->id,
            ],
        ];
    }
}
