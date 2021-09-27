<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdmissionsEdp extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public const COMPANY_SPONSORED_RADIO = [
        'No'  => 'No',
        'Yes' => 'Yes',
    ];

    public $table = 'admissions_edps';

    protected $dates = [
        'start_date',
        'end_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'admission_status_id',
        'edp_title_id',
        'start_date',
        'end_date',
        'facilitator_name_id',
        'venue_id',
        'admission_no',
        'participant_name_id',
        'company_sponsored',
        'officer_name_id',
        'total_fees',
        'amount_paid',
        'outstanding_balance',
        'note',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function admissionNoPaymentsEdps()
    {
        return $this->hasMany(PaymentsEdp::class, 'admission_no_id', 'id');
    }

    public function admission_status()
    {
        return $this->belongsTo(Status::class, 'admission_status_id');
    }

    public function edp_title()
    {
        return $this->belongsTo(Programme::class, 'edp_title_id');
    }

    public function getStartDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setStartDateAttribute($value)
    {
        $this->attributes['start_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getEndDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setEndDateAttribute($value)
    {
        $this->attributes['end_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function facilitator_name()
    {
        return $this->belongsTo(Facilitator::class, 'facilitator_name_id');
    }

    public function venue()
    {
        return $this->belongsTo(Venue::class, 'venue_id');
    }

    public function participant_name()
    {
        return $this->belongsTo(Individual::class, 'participant_name_id');
    }

    public function officer_name()
    {
        return $this->belongsTo(Officer::class, 'officer_name_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
