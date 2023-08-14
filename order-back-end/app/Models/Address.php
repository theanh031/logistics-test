<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable = [
        'detail',
        'ward',
        'city',
        'district',
        'country',
        'zip_code',
        'customer_id'
    ];
}
