<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class IndividualsApp extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public $table = 'individuals_apps';

    protected $dates = [
        'dob',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'application_no',
        'member_class',
        'title',
        'name',
        'id_no',
        'gender',
        'dob',
        'nationality',
        'address',
        'country',
        'postal_code',
        'contact_no',
        'email',
        'lps_exp',
        'hear_about_us',
        'company_name',
        'designation',
        'duration',
        'job_function',
        'industry_type',
        'company_address',
        'country_1',
        'postal_code_1',
        'qualification',
        'level',
        'institute',
        'year_attained',
        'id_front',
        'id_back',
        'certificate',
        'cold_chain',
        'contract_law',
        'cost_price_analysis',
        'delivery_and_last_mile',
        'digital_technologies',
        'integrated_logistics',
        'inventory',
        'lean_six_sigma',
        'negotiation',
        'performance_evaluation',
        'professional_networking',
        'shipping_and_freight',
        'sourcing',
        'supply_chain_management',
        'tender_and_contract',
        'transportation',
        'warehousing',
        'others',
        'priority_code',
        'note',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function applicationNoMembershipsIndividuals()
    {
        return $this->hasMany(MembershipsIndividual::class, 'application_no_id', 'id');
    }

    public function statuses()
    {
        return $this->belongsToMany(StatusApp::class);
    }

    public function getDobAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDobAttribute($value)
    {
        $this->attributes['dob'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
