<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Programme extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public const EDP_STATUS_RADIO = [
        'Active'   => 'Active',
        'Inactive' => 'Inactive',
    ];

    public $table = 'programmes';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'edp_title',
        'edp_abbr',
        'duration_day',
        'level_id',
        'member_rate',
        'public_rate',
        'edp_status',
        'note',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function edpTitleAdmissionsEdps()
    {
        return $this->hasMany(AdmissionsEdp::class, 'edp_title_id', 'id');
    }

    public function level()
    {
        return $this->belongsTo(Level::class, 'level_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
