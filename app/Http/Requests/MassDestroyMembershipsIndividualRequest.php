<?php

namespace App\Http\Requests;

use App\Models\MembershipsIndividual;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyMembershipsIndividualRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('memberships_individual_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:memberships_individuals,id',
        ];
    }
}
