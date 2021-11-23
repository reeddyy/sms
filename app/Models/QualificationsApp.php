<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QualificationsApp extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public $table = 'qualifications_apps';

    protected $dates = [
        'dob',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'application_no',
        'sponsorship',
        'level',
        'course',
        'commencement',
        'hear_about_us',
        'company_name',
        'company_address',
        'company_country',
        'company_postal_code',
        'officer_name',
        'officer_designation',
        'officer_contact',
        'officer_email',
        'applicant_name',
        'gender',
        'id_type',
        'id_no',
        'dob',
        'nationality',
        'address',
        'country',
        'postal_code',
        'contact_no',
        'email',
        'company_name_1',
        'designation_1',
        'duration_1',
        'company_name_2',
        'designation_2',
        'duration_2',
        'company_name_3',
        'designation_3',
        'duration_3',
        'qualification_1',
        'level_1',
        'institute_1',
        'year_attained_1',
        'qualification_2',
        'level_2',
        'institute_2',
        'year_attained_2',
        'qualification_3',
        'level_3',
        'institute_3',
        'year_attained_3',
        'id_front',
        'id_back',
        'certificate',
        'note',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function appNoEnrolmentsQualifications()
    {
        return $this->hasMany(EnrolmentsQualification::class, 'application_no_id', 'id');
    }

    public function statuses()
    {
        return $this->belongsToMany(StatusApp::class);
    }

    public function getDobAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDobAttribute($value)
    {
        $this->attributes['dob'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}