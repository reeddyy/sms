<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Individual extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    
    public const GENDER_RADIO = [
        'Male'   => 'Male',
        'Female' => 'Female',
    ];

    public const TITLE_SELECT = [
        'Mr'   => 'Mr',
        'Ms'   => 'Ms',
        'Miss' => 'Miss',
        'Mrs'  => 'Mrs',
        'Dr'   => 'Dr',
        'Prof' => 'Prof',
    ];

    public const ID_TYPE_SELECT = [
        'Singaporean'  => 'Singaporean',
        'Singapore PR' => 'Singapore PR',
        'Work Pass'    => 'Work Pass',
        'Others'       => 'Others',
    ];

    public $table = 'individuals';

    protected $dates = [
        'dob',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'name',
        'id_type',
        'id_no',
        'gender',
        'dob',
        'age',
        'nationality',
        'residential_address',
        'unit_no',
        'country',
        'postal_code',
        'contact_no',
        'email_address',
        'company_name_1',
        'job_designation_1',
        'duration_of_year_s_1',
        'company_name_2',
        'job_designation_2',
        'duration_of_year_s_2',
        'company_name_3',
        'job_designation_3',
        'duration_of_year_s_3',
        'total_year_s_related_work_exp',
        'qual_title_1',
        'qual_level_1',
        'institute_name_1',
        'year_attained_1',
        'qual_title_2',
        'qual_level_2',
        'institute_name_2',
        'year_attained_2',
        'qual_title_3',
        'qual_level_3',
        'institute_name_3',
        'year_attained_3',
        'special_dietary',
        'hear_about_us',
        'note',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function memberNameMembershipsIndividuals()
    {
        return $this->hasMany(MembershipsIndividual::class, 'member_name_id', 'id');
    }

    public function recipientNameCertificates()
    {
        return $this->hasMany(Certificate::class, 'recipient_name_id', 'id');
    }

    public function studentNameEnrolmentsQualifications()
    {
        return $this->hasMany(EnrolmentsQualification::class, 'student_name_id', 'id');
    }

    public function participantNameAdmissionsEdps()
    {
        return $this->hasMany(AdmissionsEdp::class, 'participant_name_id', 'id');
    }

    public function applicantNameApplicantsAdas()
    {
        return $this->hasMany(ApplicantsAda::class, 'applicant_name_id', 'id');
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
