<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Facilitator extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public const FACILITATOR_TITLE_SELECT = [
        'Mr'   => 'Mr',
        'Ms'   => 'Ms',
        'Miss' => 'Miss',
        'Mrs'  => 'Mrs',
        'Dr'   => 'Dr',
        'Prof' => 'Prof',
    ];

    public $table = 'facilitators';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'facilitator_title',
        'facilitator_name',
        'note',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function facilitatorNameAdmissionsEdps()
    {
        return $this->hasMany(AdmissionsEdp::class, 'facilitator_name_id', 'id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
