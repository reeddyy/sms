<?php

namespace App\Http\Requests;

use App\Models\StatusAda;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyStatusAdaRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('status_ada_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:status_adas,id',
        ];
    }
}
