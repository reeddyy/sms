<?php

namespace App\Http\Requests;

use App\Models\StatusLead;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyStatusLeadRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('status_lead_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:status_leads,id',
        ];
    }
}
