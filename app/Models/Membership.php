<?php

namespace App\Models;

use \DateTimeInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;

    public const MEMBER_CLASS_RADIO = [
        'Affiliate' => 'Affiliate',
        'Member'    => 'Member',
        'Fellow'    => 'Fellow',
    ];

    public const MEMBERSHIP_VALIDITY_RADIO = [
        'Active'   => 'Active',
        'Expired'  => 'Expired',
        'Upgraded' => 'Upgraded',
    ];

    public $table = 'memberships';

    protected $dates = [
        'membership_start_date',
        'membership_expiry_date',
        'payment_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'membership_no',
        'member_name_id',
        'member_class',
        'membership_start_date',
        'membership_expiry_date',
        'membership_validity',
        'no_of_renewal',
        'payment_amount',
        'payment_date',
        'payment_receipt_no',
        'payment_note',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function member_name()
    {
        return $this->belongsTo(Individual::class, 'member_name_id');
    }

    public function getMembershipStartDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setMembershipStartDateAttribute($value)
    {
        $this->attributes['membership_start_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getMembershipExpiryDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setMembershipExpiryDateAttribute($value)
    {
        $this->attributes['membership_expiry_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
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
