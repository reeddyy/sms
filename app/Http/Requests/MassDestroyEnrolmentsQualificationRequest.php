<?php

namespace App\Http\Requests;

use App\Models\EnrolmentsQualification;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyEnrolmentsQualificationRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('enrolments_qualification_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:enrolments_qualifications,id',
        ];
    }
}
