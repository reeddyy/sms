<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EdpApp extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public $table = 'edp_apps';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'application_no',
        'sponsorship',
        'no_participants',
        'level',
        'programme',
        'commencement',
        'hear_about_us',
        'company_name',
        'company_address',
        'country',
        'postal_code',
        'officer_name',
        'officer_designation',
        'officer_contact',
        'officer_email',
        'participant_name_1',
        'gender_1',
        'id_no_1',
        'designation_1',
        'duration_1',
        'contact_no_1',
        'email_1',
        'special_dietary_1',
        'participant_name_2',
        'gender_2',
        'id_no_2',
        'designation_2',
        'duration_2',
        'contact_no_2',
        'email_2',
        'special_dietary_2',
        'participant_name_3',
        'gender_3',
        'id_no_3',
        'designation_3',
        'duration_3',
        'contact_no_3',
        'email_3',
        'special_dietary_3',
        'participant_name_4',
        'gender_4',
        'id_no_4',
        'designation_4',
        'duration_4',
        'contact_no_4',
        'email_4',
        'special_dietary_4',
        'participant_name_5',
        'gender_5',
        'id_no_5',
        'designation_5',
        'duration_5',
        'contact_no_5',
        'email_5',
        'special_dietary_5',
        'note',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function statuses()
    {
        return $this->belongsToMany(StatusApp::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
