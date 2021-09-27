<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Award extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public $table = 'awards';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'award_name',
        'award_abbr',
        'validity_year',
        'award_fees',
        'note',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function awardNameApplicantsAdas()
    {
        return $this->hasMany(ApplicantsAda::class, 'award_name_id', 'id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
