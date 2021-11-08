<?php

namespace App\Http\Requests;

use App\Models\Corporate;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use App\Http\Resources\Admin\CorporateResource;
use Illuminate\Http\Response as HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Response;
use Log;

class StoreCorporateRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('corporate_create');
    }

    public function rules()
    {
        try{
            Log::info("Corporate Membership Rules Check started");
        return [
            'company_name' => [
                'string',
                'required',
            ],
            'business_reg_no' => [
                'string',
                'required',
                'unique:corporates',
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
            'phone_no' => [
                'string',
                'nullable',
            ],
            'website' => [
                'string',
                'nullable',
            ],
            'company_type' => [
                'string',
                'nullable',
            ],
            'industry_type' => [
                'string',
                'nullable',
            ],
            'employees_no' => [
                'string',
                'nullable',
            ],
            'annual_turnover' => [
                'string',
                'nullable',
            ],
            'name_1' => [
                'string',
                'nullable',
            ],
            'designation_1' => [
                'string',
                'nullable',
            ],
            'office_no_1' => [
                'string',
                'nullable',
            ],
            'mobile_no_1' => [
                'string',
                'nullable',
            ],
            'name_2' => [
                'string',
                'nullable',
            ],
            'designation_2' => [
                'string',
                'nullable',
            ],
            'office_no_2' => [
                'string',
                'nullable',
            ],
            'mobile_no_2' => [
                'string',
                'nullable',
            ],
            'name_3' => [
                'string',
                'nullable',
            ],
            'name_4' => [
                'string',
                'nullable',
            ],
            'name_5' => [
                'string',
                'nullable',
            ],
            'applicant_name' => [
                'string',
                'nullable',
            ],
            'designation' => [
                'string',
                'nullable',
            ],
            'office_no' => [
                'string',
                'nullable',
            ],
            'mobile_no' => [
                'string',
                'nullable',
            ],
            'hear_about_us' => [
                'string',
                'nullable',
            ],
        ];
    }catch(\Exception $e){
        $error = $e->getMessage();
        Log::info($error);
    }
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
