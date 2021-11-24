<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CorporatesApp extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public $table = 'corporates_apps';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'application_no',
        'member_class',
        'company_name',
        'business_reg_no',
        'company_address',
        'country',
        'postal_code',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function statuses()
    {
        return $this->belongsToMany(StatusApp::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
