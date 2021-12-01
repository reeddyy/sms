<?php

namespace App\Http\Requests;

use App\Models\StatusMembership;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateStatusMembershipRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('status_membership_edit');
    }

    public function rules()
    {
        return [
            'status_name' => [
                'string',
                'required',
                'unique:status_memberships,status_name,' . request()->route('status_membership')->id,
            ],
        ];
    }
}
