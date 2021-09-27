<?php

namespace App\Http\Requests;

use App\Models\MemberClass;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateMemberClassRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('member_class_edit');
    }

    public function rules()
    {
        return [
            'member_class_name' => [
                'string',
                'required',
                'unique:member_classes,member_class_name,' . request()->route('member_class')->id,
            ],
        ];
    }
}
