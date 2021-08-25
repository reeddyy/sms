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
            'member_name_id' => [
                'required',
                'integer',
            ],
            'member_class' => [
                'required',
            ],
            'membership_start_date' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'membership_expiry_date' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'membership_validity' => [
                'required',
            ],
            'no_of_renewal' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'payment_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'payment_receipt_no' => [
                'string',
                'nullable',
            ],
            'payment_note' => [
                'string',
                'nullable',
            ],
        ];
    }
}
