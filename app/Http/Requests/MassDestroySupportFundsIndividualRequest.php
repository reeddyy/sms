<?php

namespace App\Http\Requests;

use App\Models\SupportFundsIndividual;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroySupportFundsIndividualRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('support_funds_individual_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:support_funds_individuals,id',
        ];
    }
}
