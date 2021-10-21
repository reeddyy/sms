<?php

namespace App\Http\Requests;

use App\Models\ClassIntake;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyClassIntakeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('class_intake_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:class_intakes,id',
        ];
    }
}
