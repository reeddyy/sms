<?php

namespace App\Http\Requests;

use App\Models\DigitalModule;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyDigitalModuleRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('digital_module_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:digital_modules,id',
        ];
    }
}
