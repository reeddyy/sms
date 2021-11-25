<?php

namespace App\Http\Requests;

use App\Models\QualificationsReq;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyQualificationsReqRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('qualifications_req_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:qualifications_reqs,id',
        ];
    }
}
