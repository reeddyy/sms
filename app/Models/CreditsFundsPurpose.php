<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreditsFundsPurpose extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'credits_funds_purposes';

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

    public function purposeTrainingCreditsIndividuals()
    {
        return $this->hasMany(TrainingCreditsIndividual::class, 'purpose_id', 'id');
    }

    public function purposeSupportFundsIndividuals()
    {
        return $this->hasMany(SupportFundsIndividual::class, 'purpose_id', 'id');
    }

    public function purposeTrainingCreditsCorporates()
    {
        return $this->hasMany(TrainingCreditsCorporate::class, 'purpose_id', 'id');
    }

    public function purposeSupportFundsCorporates()
    {
        return $this->hasMany(SupportFundsCorporate::class, 'purpose_id', 'id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
