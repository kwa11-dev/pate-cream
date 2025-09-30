<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'is_sale',
        'sale_price',
        'image',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
