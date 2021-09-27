<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Certificate extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public $table = 'certificates';

    protected $dates = [
        'date_awarded',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'credential_reference',
        'award_name',
        'recipient_name_id',
        'date_awarded',
        'awarded_by',
        'note',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function recipient_name()
    {
        return $this->belongsTo(Individual::class, 'recipient_name_id');
    }

    public function getDateAwardedAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateAwardedAttribute($value)
    {
        $this->attributes['date_awarded'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
