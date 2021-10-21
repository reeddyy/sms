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
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'total_result_points' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'date_transcript_sent_1' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'date_transcript_sent_2' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
        ];
    }
}
