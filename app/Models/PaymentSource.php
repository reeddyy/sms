<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentSource extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public $table = 'payment_sources';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'payment_source_name',
        'note',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function paymentSourcePaymentsQualifications()
    {
        return $this->hasMany(PaymentsQualification::class, 'payment_source_id', 'id');
    }

    public function paymentSourcePaymentsEdps()
    {
        return $this->hasMany(PaymentsEdp::class, 'payment_source_id', 'id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
