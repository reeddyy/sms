<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ResultsModule extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public $table = 'results_modules';

    protected $dates = [
        'date_release',
        'date_transcript_sent_1',
        'date_transcript_sent_2',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'enrolment_no_id',
        'date_release',
        'module_1_id',
        'grade_1_id',
        'module_2_id',
        'grade_2_id',
        'module_3_id',
        'grade_3_id',
        'module_4_id',
        'grade_4_id',
        'module_5_id',
        'grade_5_id',
        'module_6_id',
        'grade_6_id',
        'total_result_points',
        'achievement_title_id',
        'date_transcript_sent_1',
        'date_transcript_sent_2',
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

    public function module_1()
    {
        return $this->belongsTo(Module::class, 'module_1_id');
    }

    public function grade_1()
    {
        return $this->belongsTo(Grade::class, 'grade_1_id');
    }

    public function module_2()
    {
        return $this->belongsTo(Module::class, 'module_2_id');
    }

    public function grade_2()
    {
        return $this->belongsTo(Grade::class, 'grade_2_id');
    }

    public function module_3()
    {
        return $this->belongsTo(Module::class, 'module_3_id');
    }

    public function grade_3()
    {
        return $this->belongsTo(Grade::class, 'grade_3_id');
    }

    public function module_4()
    {
        return $this->belongsTo(Module::class, 'module_4_id');
    }

    public function grade_4()
    {
        return $this->belongsTo(Grade::class, 'grade_4_id');
    }

    public function module_5()
    {
        return $this->belongsTo(Module::class, 'module_5_id');
    }

    public function grade_5()
    {
        return $this->belongsTo(Grade::class, 'grade_5_id');
    }

    public function module_6()
    {
        return $this->belongsTo(Module::class, 'module_6_id');
    }

    public function grade_6()
    {
        return $this->belongsTo(Grade::class, 'grade_6_id');
    }

    public function achievement_title()
    {
        return $this->belongsTo(Achievement::class, 'achievement_title_id');
    }

    public function getDateTranscriptSent1Attribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateTranscriptSent1Attribute($value)
    {
        $this->attributes['date_transcript_sent_1'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getDateTranscriptSent2Attribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateTranscriptSent2Attribute($value)
    {
        $this->attributes['date_transcript_sent_2'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
