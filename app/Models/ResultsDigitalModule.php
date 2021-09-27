<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ResultsDigitalModule extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public $table = 'results_digital_modules';

    protected $dates = [
        'date_release',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'enrolment_no_id',
        'date_release',
        'module_id',
        'grade_id',
        'note',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function enrolment_no()
    {
        return $this->belongsTo(EnrolmentsQualification::class, 'enrolment_no_id');
    }

    public function getDateReleaseAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateReleaseAttribute($value)
    {
        $this->attributes['date_release'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function module()
    {
        return $this->belongsTo(DigitalModule::class, 'module_id');
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class, 'grade_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
