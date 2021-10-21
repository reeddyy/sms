<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SupportFundsCorporate extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public $table = 'support_funds_corporates';

    protected $dates = [
        'date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'member_no_id',
        'fund_name_id',
        'amount',
        'date',
        'invoice_no',
        'purpose_id',
        'note',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function member_no()
    {
        return $this->belongsTo(MembershipsCorporate::class, 'member_no_id');
    }

    public function fund_name()
    {
        return $this->belongsTo(SupportFund::class, 'fund_name_id');
    }

    public function getDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateAttribute($value)
    {
        $this->attributes['date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function purpose()
    {
        return $this->belongsTo(CreditsFundsPurpose::class, 'purpose_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
