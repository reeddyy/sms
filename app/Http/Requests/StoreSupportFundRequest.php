<?php

namespace App\Http\Requests;

use App\Models\SupportFund;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreSupportFundRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('support_fund_create');
    }

    public function rules()
    {
        return [
            'fund_name' => [
                'string',
                'required',
                'unique:support_funds',
            ],
        ];
    }
}
