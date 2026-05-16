<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'property_type',
        'service_requested',
        'location',
        'other_city',
        'property_condition',
        'preferred_date',
        'final_message'
    ];
}
