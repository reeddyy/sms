<?php

namespace App\Http\Requests;

use App\Models\PaymentSource;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyPaymentSourceRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('payment_source_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:payment_sources,id',
        ];
    }
}
