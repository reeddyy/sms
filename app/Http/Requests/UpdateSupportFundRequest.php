<?php

namespace App\Http\Requests;

use App\Models\SupportFund;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSupportFundRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('support_fund_edit');
    }

    public function rules()
    {
        return [
            'fund_name' => [
                'string',
                'required',
                'unique:support_funds,fund_name,' . request()->route('support_fund')->id,
            ],
        ];
    }
}
