<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SupportFund extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public $table = 'support_funds';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'fund_name',
        'note',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function fundNameSfIndividuals()
    {
        return $this->hasMany(SfIndividual::class, 'fund_name_id', 'id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
