<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_send_id',
        'customer_receive_id',
        'staff_delivery_id',
        'payment_id',
        'status_id',
        'expected_date'
    ];
}
