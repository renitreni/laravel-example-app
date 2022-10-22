<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'street_name',
        'street_number',
        'street_type',
        'zip_code',
        'city',
        'state',
    ];
}
