<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MembershipsCorporate extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public $table = 'memberships_corporates';

    protected $dates = [
        'valid_from',
        'valid_till',
        'admission_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'application_no_id',
        'member_class_id',
        'valid_from',
        'valid_till',
        'member_no',
        'company_name_id',
        'training_credits',
        'admission_date',
        'note',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function memberNoPaymentsCorporates()
    {
        return $this->hasMany(PaymentsCorporate::class, 'member_no_id', 'id');
    }

    public function memberNoTrainingCreditsCorporates()
    {
        return $this->hasMany(TrainingCreditsCorporate::class, 'member_no_id', 'id');
    }

    public function memberNoSupportFundsCorporates()
    {
        return $this->hasMany(SupportFundsCorporate::class, 'member_no_id', 'id');
    }

    public function statuses()
    {
        return $this->belongsToMany(StatusMembership::class);
    }

    public function application_no()
    {
        return $this->belongsTo(CorporatesApp::class, 'application_no_id');
    }

    public function member_class()
    {
        return $this->belongsTo(MemberClass::class, 'member_class_id');
    }

    public function getValidFromAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setValidFromAttribute($value)
    {
        $this->attributes['valid_from'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getValidTillAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setValidTillAttribute($value)
    {
        $this->attributes['valid_till'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function company_name()
    {
        return $this->belongsTo(Corporate::class, 'company_name_id');
    }

    public function support_funds()
    {
        return $this->belongsToMany(SupportFund::class);
    }

    public function getAdmissionDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setAdmissionDateAttribute($value)
    {
        $this->attributes['admission_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
