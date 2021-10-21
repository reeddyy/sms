<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassIntake extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public $table = 'class_intakes';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'class_name',
        'note',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function classesEnrolmentsQualifications()
    {
        return $this->belongsToMany(EnrolmentsQualification::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
