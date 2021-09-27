<?php

namespace App\Http\Requests;

use App\Models\DigitalModule;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateDigitalModuleRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('digital_module_edit');
    }

    public function rules()
    {
        return [
            'module_name' => [
                'string',
                'required',
                'unique:digital_modules,module_name,' . request()->route('digital_module')->id,
            ],
            'module_abbr' => [
                'string',
                'required',
                'unique:digital_modules,module_abbr,' . request()->route('digital_module')->id,
            ],
            'module_code' => [
                'string',
                'required',
                'unique:digital_modules,module_code,' . request()->route('digital_module')->id,
            ],
            'module_status' => [
                'required',
            ],
        ];
    }
}
