<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentsCorporate extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public const MEMBERSHIP_RADIO = [
        'New'     => 'New',
        'Renewal' => 'Renewal',
        'Upgrade' => 'Upgrade',
    ];

    public $table = 'payments_corporates';

    protected $dates = [
        'payment_date',
        'member_valid_till',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'member_no_id',
        'payment_amount',
        'payment_date',
        'invoice_no',
        'membership',
        'member_valid_till',
        'note',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function member_no()
    {
        return $this->belongsTo(MembershipsCorporate::class, 'member_no_id');
    }

    public function getPaymentDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setPaymentDateAttribute($value)
    {
        $this->attributes['payment_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getMemberValidTillAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setMemberValidTillAttribute($value)
    {
        $this->attributes['member_valid_till'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
