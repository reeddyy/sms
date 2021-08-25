<?php

namespace App\Http\Requests;

use App\Models\TrainingCredit;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreTrainingCreditRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('training_credit_create');
    }

    public function rules()
    {
        return [
            'membership_no_id' => [
                'required',
                'integer',
            ],
            'valid_till' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
        ];
    }
}
