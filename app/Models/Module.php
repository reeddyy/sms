<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Module extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public const MODULE_STATUS_RADIO = [
        'Active'   => 'Active',
        'Inactive' => 'Inactive',
    ];

    public $table = 'modules';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'module_name',
        'module_abbr',
        'module_code',
        'module_status',
        'note',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function moduleResultsModules()
    {
        return $this->hasMany(ResultsModule::class, 'module_id', 'id');
    }

    public function moduleSCourses()
    {
        return $this->belongsToMany(Course::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
