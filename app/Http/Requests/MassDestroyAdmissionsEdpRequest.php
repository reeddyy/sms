<?php

namespace App\Http\Requests;

use App\Models\AdmissionsEdp;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyAdmissionsEdpRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('admissions_edp_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:admissions_edps,id',
        ];
    }
}
