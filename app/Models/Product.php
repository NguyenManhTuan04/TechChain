<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'sku',
        'name',
        'image',
        'price',
        'discount_price',
        'short_description',
        'description',
        'quantity',
        'views',
        'date',
        'category_id',
        'is_type',
        'is_new',
        'is_hot',
        'is_deal',
        'is_show_home',
    ];
    public $timestamps = false;

    public $table = 'products';

    protected  $casts = [
        'is_type'  => 'boolean',
        'is_new'  => 'boolean',
        'is_hot'  => 'boolean',
        'is_deal'  => 'boolean',
        'is_show_home'  => 'boolean',
    ];

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function images(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ImageProduct::class);
    }
}
