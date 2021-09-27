<?php

namespace App\Http\Requests;

use App\Models\ResultsModule;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateResultsModuleRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('results_module_edit');
    }

    public function rules()
    {
        return [
            'enrolment_no_id' => [
                'required',
                'integer',
            ],
            'date_release' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'module_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
