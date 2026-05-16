<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = ['full_name', 'phone', 'email', 'property_type', 'service_type', 'location', 'condition', 'preferred_date', 'message'];
}
