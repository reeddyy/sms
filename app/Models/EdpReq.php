<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EdpReq extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public $table = 'edp_reqs';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'programme',
        'level',
        'hear_about_us',
        'name',
        'designation',
        'job_function',
        'company_name',
        'industry',
        'contact_no',
        'email',
        'note',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function statuses()
    {
        return $this->belongsToMany(StatusLead::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
