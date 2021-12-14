<?php

namespace App\Helpers;
use App\Models\CorporatesApp;
use DateTime;

class ApplicationNoHelper
{
    public static function getAppNo($model)
    {
        if($model){
            $model_name = 'App\\Models\\'.$model;
            $count = $model_name::withTrashed()->count();
            $next_no = $count + 101;
            $number = str_pad($next_no, 5, '0', STR_PAD_LEFT);
            switch($model){
                case('CorporatesApp'):
                return $application_number = str_pad($number, 6, 'C', STR_PAD_LEFT);                    
            }
        }
    }
}