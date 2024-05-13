<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Odr extends Model
{
    use HasFactory;
    protected $primaryKey = 'oid';
    protected $fillable = [
        'orderfname',
        'orderlname',
        'orderemail',
        'ordermobile',
        'order_date',
        'cancel_order_date',
        'order_delivery_date',
        'order_delivery_address',
        'city',
        'total_amount',
        'order_payment_method',
        'payment_id',
        'order_status',
        'message',
        'tracking_no',
        'is_cancel_order',
        'user_id',
    ];

    protected $dates = [
        'order_date',
        'cancel_order_date',
        'order_delivery_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
