<?php

namespace App\Http\Requests;

use App\Models\TrainingCreditsCorporate;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreTrainingCreditsCorporateRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('training_credits_corporate_create');
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
