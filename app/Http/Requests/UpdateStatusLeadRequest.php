<?php

namespace App\Http\Requests;

use App\Models\StatusLead;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateStatusLeadRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('status_lead_edit');
    }

    public function rules()
    {
        return [
            'status_name' => [
                'string',
                'required',
                'unique:status_leads,status_name,' . request()->route('status_lead')->id,
            ],
        ];
    }
}
