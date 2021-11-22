<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StatusApp extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public $table = 'status_apps';

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

    public function statusQualificationsApps()
    {
        return $this->belongsToMany(QualificationsApp::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}