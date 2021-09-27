<?php

namespace App\Http\Requests;

use App\Models\SupportFund;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroySupportFundRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('support_fund_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:support_funds,id',
        ];
    }
}
