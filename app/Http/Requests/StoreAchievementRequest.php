<?php

namespace App\Http\Requests;

use App\Models\Achievement;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreAchievementRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('achievement_create');
    }

    public function rules()
    {
        return [
            'achievement_title' => [
                'string',
                'nullable',
            ],
        ];
    }
}
