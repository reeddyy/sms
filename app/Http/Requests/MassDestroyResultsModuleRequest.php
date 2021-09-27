<?php

namespace App\Http\Requests;

use App\Models\ResultsModule;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyResultsModuleRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('results_module_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:results_modules,id',
        ];
    }
}
