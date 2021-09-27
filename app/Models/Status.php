<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Status extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public $table = 'statuses';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'status_name',
        'note',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function memberStatusMembershipsIndividuals()
    {
        return $this->hasMany(MembershipsIndividual::class, 'member_status_id', 'id');
    }

    public function enrolmentStatusEnrolmentsQualifications()
    {
        return $this->hasMany(EnrolmentsQualification::class, 'enrolment_status_id', 'id');
    }

    public function adaStatusApplicantsAdas()
    {
        return $this->hasMany(ApplicantsAda::class, 'ada_status_id', 'id');
    }

    public function admissionStatusAdmissionsEdps()
    {
        return $this->hasMany(AdmissionsEdp::class, 'admission_status_id', 'id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
