<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StatusEdp extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public $table = 'status_edps';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'status_name',
        'note',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function statusAdmissionsEdps()
    {
        return $this->belongsToMany(AdmissionsEdp::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
