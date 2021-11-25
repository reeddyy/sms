<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CorporatesApp extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public $table = 'corporates_apps';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'application_no',
        'member_class',
        'company_name',
        'business_reg_no',
        'company_address',
        'country',
        'postal_code',
        'company_tel_no',
        'company_website',
        'company_type',
        'industry_type',
        'no_employees',
        'annual_turnover',
        'title_1',
        'name_1',
        'designation_1',
        'email_1',
        'office_no_1',
        'mobile_no_1',
        'title_2',
        'name_2',
        'designation_2',
        'email_2',
        'office_no_2',
        'mobile_no_2',
        'name_3',
        'email_3',
        'name_4',
        'email_4',
        'name_5',
        'email_5',
        'business_profile',
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
        'title',
        'applicant_name',
        'designation',
        'email',
        'office_no',
        'mobile_no',
        'hear_about_us',
        'priority_code',
        'note',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function statuses()
    {
        return $this->belongsToMany(StatusApp::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
