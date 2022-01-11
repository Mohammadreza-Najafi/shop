<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable=[
        "name",
        "price",
        "available_quantity",
        "images"
    ];

    public function discount(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Discount::class);
    }

    public function users(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(User::class,"favorites","product_id","user_id");
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function productFeatures(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(ProductFeatures::class);
    }



}
