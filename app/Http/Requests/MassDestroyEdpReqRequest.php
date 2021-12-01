<?php

namespace App\Http\Requests;

use App\Models\EdpReq;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyEdpReqRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('edp_req_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:edp_reqs,id',
        ];
    }
}
