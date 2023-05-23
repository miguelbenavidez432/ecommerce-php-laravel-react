<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'status',
        'description',
        'status',
        'summary',
        'price',
        'disscounted_price',
        'images',
        'category_id',
        'brand_id',
        'stock'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function review(){
        return $this->hasMany(Review::class);
    }
}
