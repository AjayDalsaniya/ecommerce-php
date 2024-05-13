<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemCategory extends Model
{
    use HasFactory;
    protected $primaryKey = 'icid';

    protected $fillable = [
        'item_category_name',
        'item_category_description',
        'item_category_image',

    ];
    public function subcategories()
{
    return $this->hasMany(Subcategory::class, 'item_cat_id');
}
}
