<?php

namespace App\Http\Requests;

use App\Models\PaymentsIndividual;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePaymentsIndividualRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('payments_individual_edit');
    }

    public function rules()
    {
        return [
            'member_no_id' => [
                'required',
                'integer',
            ],
            'payment_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'invoice_no' => [
                'string',
                'nullable',
            ],
            'member_valid_till' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
        ];
    }
}
