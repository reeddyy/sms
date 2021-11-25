<?php

namespace App\Http\Requests;

use App\Models\AdaApp;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyAdaAppRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('ada_app_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:ada_apps,id',
        ];
    }
}
