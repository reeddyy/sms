<?php

namespace App\Http\Requests;

use App\Models\PaymentsIndividual;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyPaymentsIndividualRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('payments_individual_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:payments_individuals,id',
        ];
    }
}
