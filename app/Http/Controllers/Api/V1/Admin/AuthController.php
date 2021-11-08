<?php

namespace App\Http\Controllers\Api\V1\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Api\V1\Admin\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;

class AuthController extends BaseController
{
    public function login(Request $request)
    {


        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 
            $auth = Auth::user(); 
            $success['token'] =  $auth->createToken('LaravelSanctumAuth')->plainTextToken; 
            $success['name'] =  $auth->name;

            return $this->handleResponse($success, 'User logged-in!');
        } 
        else{ 
            return $this->handleError('Unauthorised.', ['error'=>'Unauthorised']);
        } 
    }
}