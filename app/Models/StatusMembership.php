<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StatusMembership extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public $table = 'status_memberships';

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

    public function statusMembershipsCorporates()
    {
        return $this->belongsToMany(MembershipsCorporate::class);
    }

    public function statusMembershipsIndividuals()
    {
        return $this->belongsToMany(MembershipsIndividual::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
