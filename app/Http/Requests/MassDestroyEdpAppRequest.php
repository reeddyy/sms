<?php

namespace App\Http\Requests;

use App\Models\EdpApp;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyEdpAppRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('edp_app_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:edp_apps,id',
        ];
    }
}
