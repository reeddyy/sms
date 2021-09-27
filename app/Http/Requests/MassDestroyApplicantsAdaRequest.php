<?php

namespace App\Http\Requests;

use App\Models\ApplicantsAda;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyApplicantsAdaRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('applicants_ada_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:applicants_adas,id',
        ];
    }
}
