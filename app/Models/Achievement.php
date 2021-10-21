<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Achievement extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public $table = 'achievements';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'achievement_title',
        'note',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function achievementTitleResultsModules()
    {
        return $this->hasMany(ResultsModule::class, 'achievement_title_id', 'id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
