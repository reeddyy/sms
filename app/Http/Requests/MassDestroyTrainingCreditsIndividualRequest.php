<?php

namespace App\Http\Requests;

use App\Models\TrainingCreditsIndividual;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyTrainingCreditsIndividualRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('training_credits_individual_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:training_credits_individuals,id',
        ];
    }
}
