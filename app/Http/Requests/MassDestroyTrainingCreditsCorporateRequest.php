<?php

namespace App\Http\Requests;

use App\Models\TrainingCreditsCorporate;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyTrainingCreditsCorporateRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('training_credits_corporate_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:training_credits_corporates,id',
        ];
    }
}
