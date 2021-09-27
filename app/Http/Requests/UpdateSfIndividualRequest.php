<?php

namespace App\Http\Requests;

use App\Models\SfIndividual;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSfIndividualRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('sf_individual_edit');
    }

    public function rules()
    {
        return [
            'fund_name_id' => [
                'required',
                'integer',
            ],
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
