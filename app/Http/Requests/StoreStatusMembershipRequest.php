<?php

namespace App\Http\Requests;

use App\Models\StatusMembership;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreStatusMembershipRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('status_membership_create');
    }

    public function rules()
    {
        return [
            'status_name' => [
                'string',
                'required',
                'unique:status_memberships',
            ],
        ];
    }
}
