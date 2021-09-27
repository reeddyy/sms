<?php

namespace App\Http\Requests;

use App\Models\MemberClass;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyMemberClassRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('member_class_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:member_classes,id',
        ];
    }
}
