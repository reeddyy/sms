<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ApplicantsAda extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public $table = 'applicants_adas';

    protected $dates = [
        'validity_start',
        'validity_end',
        'payment_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'application_no_id',
        'award_name_id',
        'validity_start',
        'validity_end',
        'ada_no',
        'applicant_name_id',
        'amount_paid',
        'payment_date',
        'invoice_no',
        'note',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function statuses()
    {
        return $this->belongsToMany(StatusAda::class);
    }

    public function application_no()
    {
        return $this->belongsTo(AdaApp::class, 'application_no_id');
    }

    public function award_name()
    {
        return $this->belongsTo(Award::class, 'award_name_id');
    }

    public function getValidityStartAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setValidityStartAttribute($value)
    {
        $this->attributes['validity_start'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getValidityEndAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setValidityEndAttribute($value)
    {
        $this->attributes['validity_end'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function applicant_name()
    {
        return $this->belongsTo(Individual::class, 'applicant_name_id');
    }

    public function getPaymentDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setPaymentDateAttribute($value)
    {
        $this->attributes['payment_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
