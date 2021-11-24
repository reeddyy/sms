<?php

namespace App\Http\Requests;

use App\Models\CorporatesApp;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCorporatesAppRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('corporates_app_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:corporates_apps,id',
        ];
    }
}
