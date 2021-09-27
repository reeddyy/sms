<?php

namespace App\Http\Requests;

use App\Models\DigitalModule;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreDigitalModuleRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('digital_module_create');
    }

    public function rules()
    {
        return [
            'module_name' => [
                'string',
                'required',
                'unique:digital_modules',
            ],
            'module_abbr' => [
                'string',
                'required',
                'unique:digital_modules',
            ],
            'module_code' => [
                'string',
                'required',
                'unique:digital_modules',
            ],
            'module_status' => [
                'required',
            ],
        ];
    }
}
