<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderedItem extends Model
{
    use HasFactory;
    protected $table = 'ordered_items';
    protected $primaryKey = 'orderitemid';
    protected $fillable = [
        'odr_id',
        'item_id',
        'user_id',
        'price',
        'quantity',
        'totalprice',
    ];

    // Define relationships with Order and Item models if needed
    public function odr()
    {
        return $this->belongsTo(Odr::class, 'odr_id');
    }

    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
