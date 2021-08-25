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
        'results_release_date',
        'transcript_1_release_date',
        'transcript_2_release_date',
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
        'payment_amount',
        'payment_date',
        'receipt_no',
        'payment_note',
        'amount_paid',
        'outstanding_balance',
        'results_release_date',
        'module_1_name_id',
        'module_1_grade_id',
        'module_2_name_id',
        'module_2_grade_id',
        'module_3_name_id',
        'module_3_grade_id',
        'module_4_name_id',
        'module_4_grade_id',
        'module_5_name_id',
        'module_5_grade_id',
        'module_6_name_id',
        'module_6_grade_id',
        'transcript_1_release_date',
        'transcript_2_release_date',
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

    public function getResultsReleaseDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setResultsReleaseDateAttribute($value)
    {
        $this->attributes['results_release_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function module_1_name()
    {
        return $this->belongsTo(Module::class, 'module_1_name_id');
    }

    public function module_1_grade()
    {
        return $this->belongsTo(Grade::class, 'module_1_grade_id');
    }

    public function module_2_name()
    {
        return $this->belongsTo(Module::class, 'module_2_name_id');
    }

    public function module_2_grade()
    {
        return $this->belongsTo(Grade::class, 'module_2_grade_id');
    }

    public function module_3_name()
    {
        return $this->belongsTo(Module::class, 'module_3_name_id');
    }

    public function module_3_grade()
    {
        return $this->belongsTo(Grade::class, 'module_3_grade_id');
    }

    public function module_4_name()
    {
        return $this->belongsTo(Module::class, 'module_4_name_id');
    }

    public function module_4_grade()
    {
        return $this->belongsTo(Grade::class, 'module_4_grade_id');
    }

    public function module_5_name()
    {
        return $this->belongsTo(Module::class, 'module_5_name_id');
    }

    public function module_5_grade()
    {
        return $this->belongsTo(Grade::class, 'module_5_grade_id');
    }

    public function module_6_name()
    {
        return $this->belongsTo(Module::class, 'module_6_name_id');
    }

    public function module_6_grade()
    {
        return $this->belongsTo(Grade::class, 'module_6_grade_id');
    }

    public function getTranscript1ReleaseDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setTranscript1ReleaseDateAttribute($value)
    {
        $this->attributes['transcript_1_release_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getTranscript2ReleaseDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setTranscript2ReleaseDateAttribute($value)
    {
        $this->attributes['transcript_2_release_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
