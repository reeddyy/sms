<?php

namespace App\Helpers;
use App\Models\CorporatesApp;
use DateTime;
use Carbon\Carbon;

class ApplicationNoHelper
{
    public static function getAppNo($model)
    {
        if($model){
            $model_name = 'App\\Models\\'.$model;
            $count = $model_name::whereYear('created_at', Carbon::now()->format('Y'))->withTrashed()->count();
            $next_no = $count + 1;
            $number = str_pad($next_no, 4, '0', STR_PAD_LEFT);
            $year = Carbon::now()->format('y'); // year in 2 digits
            switch($model){
                case('CorporatesApp'):                
                    return $application_number = $year.'8'.$number;
                case('IndividualsApp'):
                    return $application_number = $year.'9'.$number;
                case('QualificationsApp'):
                    return $application_number = $year.'3'.$number;
                case('EdpApp'):
                    return $application_number = $year.'1'.$number;
                case('AdaApp'):
                    return $application_number = $year.'7'.$number;                
            }
        }
    }
}