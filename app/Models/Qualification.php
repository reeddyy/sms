<?php

namespace App\Models;

use \DateTimeInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Qualification extends Model
{
    use SoftDeletes;
    use HasFactory;

    public const COMPANY_SPONSORED_RADIO = [
        'No'  => 'No',
        'Yes' => 'Yes',
    ];

    public const ENROLMENT_STATUS_RADIO = [
        'Accepted'  => 'Accepted',
        'Pending'   => 'Pending',
        'Rejected'  => 'Rejected',
        'Deferred'  => 'Deferred',
        'Withdrawn' => 'Withdrawn',
    ];

    public $table = 'qualifications';

    protected $dates = [
        'course_start_date',
        'course_end_date',
        'ssg_payment_date',
        'payment_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'student_name_id',
        'course_name_id',
        'course_start_date',
        'course_end_date',
        'enrolment_status',
        'company_sponsored',
        'company_name',
        'company_address_line_1',
        'company_address_line_2',
        'country',
        'postal_code',
        'officer_in_charge_name',
        'officer_designation',
        'officer_contact_no',
        'officer_email_address',
        'ssg_claim_amount',
        'ssg_claim_no',
        'ssg_payment_date',
        'ssg_receipt_no',
        'waive_amount',
        'tc_utilised_amount',
        'instalment_amount',
        'payment_date',
        'receipt_no',
        'module_name_id',
        'module_grade_id',
        'note',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function student_name()
    {
        return $this->belongsTo(Individual::class, 'student_name_id');
    }

    public function course_name()
    {
        return $this->belongsTo(Course::class, 'course_name_id');
    }

    public function getCourseStartDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setCourseStartDateAttribute($value)
    {
        $this->attributes['course_start_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getCourseEndDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setCourseEndDateAttribute($value)
    {
        $this->attributes['course_end_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getSsgPaymentDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setSsgPaymentDateAttribute($value)
    {
        $this->attributes['ssg_payment_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getPaymentDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setPaymentDateAttribute($value)
    {
        $this->attributes['payment_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function module_name()
    {
        return $this->belongsTo(Module::class, 'module_name_id');
    }

    public function module_grade()
    {
        return $this->belongsTo(Grade::class, 'module_grade_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
