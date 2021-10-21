<?php

namespace App\Http\Requests;

use App\Models\CreditsFundsPurpose;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCreditsFundsPurposeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('credits_funds_purpose_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:credits_funds_purposes,id',
        ];
    }
}
