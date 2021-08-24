<?php

namespace App\Http\Requests;

use App\Models\Membership;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateMembershipRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('membership_edit');
    }

    public function rules()
    {
        return [
            'membership_no' => [
                'string',
                'required',
                'unique:memberships,membership_no,' . request()->route('membership')->id,
            ],
        ];
    }
}
