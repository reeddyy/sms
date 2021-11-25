<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdaApp extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public $table = 'ada_apps';

    protected $dates = [
        'dob',
        'date_awarded_1',
        'date_awarded_2',
        'date_awarded_3',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'application_no',
        'award_name',
        'hear_about_us',
        'title',
        'name',
        'id_no',
        'gender',
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
        'country_1',
        'company_name_2',
        'designation_2',
        'duration_2',
        'country_2',
        'company_name_3',
        'designation_3',
        'duration_3',
        'country_3',
        'programme_1',
        'certificate_no_1',
        'date_awarded_1',
        'certificate_1',
        'programme_2',
        'certificate_no_2',
        'date_awarded_2',
        'certificate_2',
        'programme_3',
        'certificate_no_3',
        'date_awarded_3',
        'certificate_3',
        'note',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

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

    public function getDateAwarded1Attribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateAwarded1Attribute($value)
    {
        $this->attributes['date_awarded_1'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getDateAwarded2Attribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateAwarded2Attribute($value)
    {
        $this->attributes['date_awarded_2'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getDateAwarded3Attribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateAwarded3Attribute($value)
    {
        $this->attributes['date_awarded_3'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
