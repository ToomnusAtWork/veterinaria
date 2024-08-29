<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

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

    public function title(): string
    {
        return $this->title;
    }

    public function productcategory()
    {
        return $this->belongsTo(ProductCategory::class);
    }   

    public function scopeAlphabetical(Builder $query): Builder
    {
        return $query->orderBy('name', 'asc');
    }

    public function scopeRecent(Builder $query): Builder
    {
        return $query->orderBy('created_at', 'desc');
    }

    public function scopePopular()
    {
        return ;
    }

    public function scopePriceLowToHigh(Builder $query): Builder
    {
        return $query->orderBy('price', 'asc');
    }

    public function scopePriceHighToLow(Builder $query): Builder
    {
        return $query->orderBy('price', 'desc');
    }

}
