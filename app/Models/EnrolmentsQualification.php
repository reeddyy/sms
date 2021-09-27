<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EnrolmentsQualification extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public const COMPANY_SPONSORED_RADIO = [
        'No'  => 'No',
        'Yes' => 'Yes',
    ];

    public $table = 'enrolments_qualifications';

    protected $dates = [
        'start_date',
        'end_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'enrolment_status_id',
        'enrolment_no',
        'student_name_id',
        'course_title_id',
        'start_date',
        'end_date',
        'company_sponsored',
        'officer_name_id',
        'total_fees',
        'amount_paid',
        'outstanding_balance',
        'result_points',
        'note',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function enrolmentNoPaymentsQualifications()
    {
        return $this->hasMany(PaymentsQualification::class, 'enrolment_no_id', 'id');
    }

    public function enrolmentNoResultsModules()
    {
        return $this->hasMany(ResultsModule::class, 'enrolment_no_id', 'id');
    }

    public function enrolmentNoResultsDigitalModules()
    {
        return $this->hasMany(ResultsDigitalModule::class, 'enrolment_no_id', 'id');
    }

    public function enrolment_status()
    {
        return $this->belongsTo(Status::class, 'enrolment_status_id');
    }

    public function student_name()
    {
        return $this->belongsTo(Individual::class, 'student_name_id');
    }

    public function course_title()
    {
        return $this->belongsTo(Course::class, 'course_title_id');
    }

    public function getStartDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setStartDateAttribute($value)
    {
        $this->attributes['start_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getEndDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setEndDateAttribute($value)
    {
        $this->attributes['end_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function officer_name()
    {
        return $this->belongsTo(Officer::class, 'officer_name_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}