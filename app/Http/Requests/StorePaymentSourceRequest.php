<?php

namespace App\Http\Requests;

use App\Models\PaymentSource;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePaymentSourceRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('payment_source_create');
    }

    public function rules()
    {
        return [
            'payment_source_name' => [
                'string',
                'required',
                'unique:payment_sources',
            ],
        ];
    }
}
