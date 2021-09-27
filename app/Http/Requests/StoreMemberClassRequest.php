<?php

namespace App\Http\Requests;

use App\Models\MemberClass;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreMemberClassRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('member_class_create');
    }

    public function rules()
    {
        return [
            'member_class_name' => [
                'string',
                'required',
                'unique:member_classes',
            ],
        ];
    }
}
