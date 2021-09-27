<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public const COURSE_STATUS_RADIO = [
        'Active'   => 'Active',
        'Inactive' => 'Inactive',
    ];

    public $table = 'courses';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'course_title',
        'course_abbr',
        'duration_month',
        'level_id',
        'member_rate',
        'public_rate',
        'course_fee',
        'm_el_fee',
        'examination_fee',
        'registration_fee',
        'no_of_instalment',
        'instalment_fee_1st',
        'instalment_fee_2nd',
        'instalment_fee_3rd',
        'course_status',
        'note',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function courseTitleEnrolmentsQualifications()
    {
        return $this->hasMany(EnrolmentsQualification::class, 'course_title_id', 'id');
    }

    public function level()
    {
        return $this->belongsTo(Level::class, 'level_id');
    }

    public function module_s()
    {
        return $this->belongsToMany(Module::class);
    }

    public function digital_module_s()
    {
        return $this->belongsToMany(DigitalModule::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
