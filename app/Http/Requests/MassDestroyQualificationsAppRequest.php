<?php

namespace App\Http\Requests;

use App\Models\QualificationsApp;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyQualificationsAppRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('qualifications_app_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:qualifications_apps,id',
        ];
    }
}