<?php

namespace App\Http\Requests;

use App\Models\CfPurpose;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCfPurposeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('cf_purpose_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:cf_purposes,id',
        ];
    }
}
