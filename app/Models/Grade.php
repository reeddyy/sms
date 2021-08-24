<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    public const GRADE_SELECT = [
        'A*' => 'A*',
        'A'  => 'A',
        'B'  => 'B',
        'C'  => 'C',
        'D'  => 'D',
        'E'  => 'E',
        'F'  => 'F',
        'NG' => 'NG',
    ];

    public $table = 'grades';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'grade',
        'grade_description',
        'grade_point',
        'grade_marks',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
