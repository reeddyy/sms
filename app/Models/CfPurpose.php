<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CfPurpose extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'cf_purposes';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'purpose_name',
        'note',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function purposeTcIndividuals()
    {
        return $this->hasMany(TcIndividual::class, 'purpose_id', 'id');
    }

    public function purposeSfIndividuals()
    {
        return $this->hasMany(SfIndividual::class, 'purpose_id', 'id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
