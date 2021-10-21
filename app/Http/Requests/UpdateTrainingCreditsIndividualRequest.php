<?php

namespace App\Http\Requests;

use App\Models\TrainingCreditsIndividual;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateTrainingCreditsIndividualRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('training_credits_individual_edit');
    }

    public function rules()
    {
        return [
            'member_no_id' => [
                'required',
                'integer',
            ],
            'date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'invoice_no' => [
                'string',
                'nullable',
            ],
        ];
    }
}
