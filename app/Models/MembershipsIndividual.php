<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MembershipsIndividual extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public $table = 'memberships_individuals';

    protected $dates = [
        'start_date',
        'valid_till',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'member_status_id',
        'member_class_id',
        'start_date',
        'valid_till',
        'member_no',
        'member_name_id',
        'training_credits',
        'support_funds',
        'note',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function memberNoTcIndividuals()
    {
        return $this->hasMany(TcIndividual::class, 'member_no_id', 'id');
    }

    public function memberNoPaymentsIndividuals()
    {
        return $this->hasMany(PaymentsIndividual::class, 'member_no_id', 'id');
    }

    public function memberNoSfIndividuals()
    {
        return $this->hasMany(SfIndividual::class, 'member_no_id', 'id');
    }

    public function member_status()
    {
        return $this->belongsTo(Status::class, 'member_status_id');
    }

    public function member_class()
    {
        return $this->belongsTo(MemberClass::class, 'member_class_id');
    }

    public function getStartDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setStartDateAttribute($value)
    {
        $this->attributes['start_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getValidTillAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setValidTillAttribute($value)
    {
        $this->attributes['valid_till'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function member_name()
    {
        return $this->belongsTo(Individual::class, 'member_name_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
