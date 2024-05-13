<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $primaryKey = 'iid'; // Assuming 'iid' is the primary key

    protected $fillable = [
        'item_name', 'item_price', 'item_description', 'item_image', 'subcategory_id'
    ];
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class, 'subcategory_id');
    }
}
