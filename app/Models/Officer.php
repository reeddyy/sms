<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Officer extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public const OFFICER_TITLE_SELECT = [
        'Mr'   => 'Mr',
        'Ms'   => 'Ms',
        'Miss' => 'Miss',
        'Mrs'  => 'Mrs',
        'Dr'   => 'Dr',
        'Prof' => 'Prof',
    ];

    public $table = 'officers';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'officer_title',
        'officer_name',
        'officer_designation',
        'officer_email_address',
        'officer_contact_no',
        'company_name',
        'company_address',
        'unit_no',
        'country',
        'postal_code',
        'hear_about_us',
        'note',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function officerNameEnrolmentsQualifications()
    {
        return $this->hasMany(EnrolmentsQualification::class, 'officer_name_id', 'id');
    }

    public function officerNameAdmissionsEdps()
    {
        return $this->hasMany(AdmissionsEdp::class, 'officer_name_id', 'id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
