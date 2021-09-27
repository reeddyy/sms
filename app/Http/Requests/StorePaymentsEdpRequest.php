<?php

namespace App\Http\Requests;

use App\Models\PaymentsEdp;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePaymentsEdpRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('payments_edp_create');
    }

    public function rules()
    {
        return [
            'admission_no_id' => [
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
        ];
    }
}
