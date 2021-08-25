<?php

namespace App\Models;

use \DateTimeInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TrainingCredit extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'training_credits';

    protected $dates = [
        'valid_till',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'membership_no_id',
        'training_credit',
        'tc_brought_forward',
        'digital_resisilience_fund',
        'digital_enabler_fund',
        'cf_avaliable',
        'cf_used',
        'valid_till',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function membership_no()
    {
        return $this->belongsTo(Membership::class, 'membership_no_id');
    }

    public function getValidTillAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setValidTillAttribute($value)
    {
        $this->attributes['valid_till'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
