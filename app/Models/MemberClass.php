<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MemberClass extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public $table = 'member_classes';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'member_class_name',
        'note',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function memberClassMembershipsIndividuals()
    {
        return $this->hasMany(MembershipsIndividual::class, 'member_class_id', 'id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
