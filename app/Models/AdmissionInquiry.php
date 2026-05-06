<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdmissionInquiry extends Model
{
    use SoftDeletes;

    protected $table = 'admission_inquiries';

    protected $fillable = [
        'name',
        'mobile_number',
        'guardian_mobile_number',
        'interested_course',
        'city',
        'state',
        'scholarship_status',
        'admission_budget',
        'status',
        'notes',
    ];

    protected $casts = [
        'admission_budget' => 'decimal:2',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];
}
