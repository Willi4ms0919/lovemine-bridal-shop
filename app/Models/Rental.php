<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'contact_number',
        'address',
        'event_date',
        'pickup_date',
        'return_date',
        'selected_items',
    ];

    protected $casts = [
        'selected_items' => 'array', // automatically cast JSON to array
    ];
}
