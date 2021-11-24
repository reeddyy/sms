<?php

namespace App\Http\Requests;

use App\Models\IndividualsApp;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyIndividualsAppRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('individuals_app_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:individuals_apps,id',
        ];
    }
}
