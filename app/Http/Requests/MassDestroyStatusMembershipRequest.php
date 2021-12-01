<?php

namespace App\Http\Requests;

use App\Models\StatusMembership;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyStatusMembershipRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('status_membership_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:status_memberships,id',
        ];
    }
}
