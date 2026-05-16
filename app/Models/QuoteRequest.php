<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuoteRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'phone',
        'email',
        'property_type',
        'service_type',
        'location',
        'condition',
        'preferred_date',
        'message'
    ];

    protected $casts = [
        'preferred_date' => 'date',
    ];
}
