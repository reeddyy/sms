<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public const COURSE_LEVEL_RADIO = [
        'Foundation' => 'Foundation',
        'Managerial' => 'Managerial',
        'Leadership' => 'Leadership',
    ];

    public $table = 'courses';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'course_name',
        'course_abbr',
        'course_level',
        'course_duration',
        'course_total_fee',
        'course_fee',
        'm_el_fee',
        'examination_fee',
        'registration_fee',
        'no_of_instalment',
        'instalment_1_fee',
        'instalment_2_fee',
        'instalment_3_fee',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function course_modules()
    {
        return $this->belongsToMany(Module::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
