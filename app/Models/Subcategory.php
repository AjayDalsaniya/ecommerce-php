<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $primaryKey = 'isid';
    // public function itemCategory()
    // {
    //     return $this->belongsTo(ItemCategory::class, 'item_cat_id');
    // }
    protected $fillable = [
        'subcategory_name',
        'subcategory_description',
        'subcategory_image',
        'item_cat_id',
    ];

    public function itemCategory()
{
    return $this->belongsTo(ItemCategory::class, 'item_cat_id');
}
}
