<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Corporate extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public const TITLE_SELECT = [
        'Mr'   => 'Mr',
        'Ms'   => 'Ms',
        'Miss' => 'Miss',
        'Mrs'  => 'Mrs',
        'Dr'   => 'Dr',
        'Prof' => 'Prof',
    ];

    public const TITLE_1_SELECT = [
        'Mr'   => 'Mr',
        'Ms'   => 'Ms',
        'Miss' => 'Miss',
        'Mrs'  => 'Mrs',
        'Dr'   => 'Dr',
        'Prof' => 'Prof',
    ];

    public const TITLE_2_SELECT = [
        'Mr'   => 'Mr',
        'Ms'   => 'Ms',
        'Miss' => 'Miss',
        'Mrs'  => 'Mrs',
        'Dr'   => 'Dr',
        'Prof' => 'Prof',
    ];

    public $table = 'corporates';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'company_name',
        'business_reg_no',
        'company_address',
        'unit_no',
        'country',
        'postal_code',
        'phone_no',
        'website',
        'company_type',
        'industry_type',
        'employees_no',
        'annual_turnover',
        'title_1',
        'name_1',
        'designation_1',
        'email_address_1',
        'office_no_1',
        'mobile_no_1',
        'title_2',
        'name_2',
        'designation_2',
        'email_address_2',
        'office_no_2',
        'mobile_no_2',
        'name_3',
        'email_address_3',
        'name_4',
        'email_address_4',
        'name_5',
        'email_address_5',
        'title',
        'applicant_name',
        'designation',
        'email_address',
        'office_no',
        'mobile_no',
        'note',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function companyNameMembershipsCorporates()
    {
        return $this->hasMany(MembershipsCorporate::class, 'company_name_id', 'id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
