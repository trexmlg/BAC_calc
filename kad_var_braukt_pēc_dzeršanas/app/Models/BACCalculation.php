<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BACCalculation extends Model
{
    protected $fillable = [
        'user_id',
        'weight',
        'gender',
        'drinks_consumed',
        'alcohol_percentage',
        'time_period_hours',
        'bac_result',
        'status',
        'estimated_sober_minutes',
    ];

    protected $casts = [
        'weight' => 'decimal:2',    
        'alcohol_percentage' => 'decimal:1',
        'bac_result' => 'decimal:2',
    ];
};