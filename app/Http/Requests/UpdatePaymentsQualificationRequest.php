<?php

namespace App\Http\Requests;

use App\Models\PaymentsQualification;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePaymentsQualificationRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('payments_qualification_edit');
    }

    public function rules()
    {
        return [
            'enrolment_no_id' => [
                'required',
                'integer',
            ],
            'payment_source_id' => [
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
            'instalment_no' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
