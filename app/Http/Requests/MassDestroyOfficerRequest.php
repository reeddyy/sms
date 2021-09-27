<?php

namespace App\Http\Requests;

use App\Models\Officer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyOfficerRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('officer_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:officers,id',
        ];
    }
}
