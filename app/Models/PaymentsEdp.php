<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentsEdp extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public $table = 'payments_edps';

    protected $dates = [
        'payment_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'admission_no_id',
        'payment_source_id',
        'payment_amount',
        'payment_date',
        'invoice_no',
        'note',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function admission_no()
    {
        return $this->belongsTo(AdmissionsEdp::class, 'admission_no_id');
    }

    public function payment_source()
    {
        return $this->belongsTo(PaymentSource::class, 'payment_source_id');
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
