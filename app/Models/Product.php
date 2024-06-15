<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'description',
        'quantity',
        'price',
        'product_category_id'
    ];

    public function productcategory()
    {
        return $this->belongsTo(ProductCategory::class);
    }   

    public function scopeRating()
    {
        return ;
    }

    public function scopeRecent()
    {
        return ;
    }

    public function scopePopular()
    {
        return ;
    }

    public function scopeOrderByPrice($query, $order)
    {
        if ($order === 'PriceLowToHigh') {
            return $query->orderBy('price', 'asc');
        } elseif ($order === 'PriceHighToLow') {
            return $query->orderBy('price', 'desc');
        }

        // default is PriceLowToHigh
        return $query->orderBy('price', 'asc');
    }

}
