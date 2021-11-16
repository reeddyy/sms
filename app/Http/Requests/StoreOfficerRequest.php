<?php

namespace App\Http\Requests;

use App\Models\Officer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Contracts\Validation\Validator;

class StoreOfficerRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('officer_create');
    }

    public function rules()
    {
        return [
            'officer_name' => [
                'string',
                'required',
            ],
            'officer_designation' => [
                'string',
                'nullable',
            ],
            'officer_email_address' => [
                'required',
                'unique:officers',
            ],
            'officer_contact_no' => [
                'string',
                'nullable',
            ],
            'company_name' => [
                'string',
                'nullable',
            ],
            'company_address' => [
                'string',
                'nullable',
            ],
            'unit_no' => [
                'string',
                'nullable',
            ],
            'country' => [
                'string',
                'nullable',
            ],
            'postal_code' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'hear_about_us' => [
                'string',
                'nullable',
            ],
        ];
    }
    
    public function failedValidation(Validator $validator)
    {
        $errors = $validator->errors(); // Here is your array of errors

        $response = response()->json([
            'message' => 'Invalid data send',
            'details' => $errors->messages(),
        ], 422);

        return $response;
    }
}
