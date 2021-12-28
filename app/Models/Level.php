<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Level extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public $table = 'levels';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'level_name',
        'note',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function levelCourses()
    {
        return $this->hasMany(Course::class, 'level_id', 'id');
    }

    public function levelProgrammes()
    {
        return $this->hasMany(Programme::class, 'level_id', 'id');
    }

    public function moduleLevelModules()
    {
        return $this->hasMany(Module::class, 'module_level_id', 'id');
    }
    
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
