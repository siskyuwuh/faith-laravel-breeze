<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $guarded = [
        'id',
    ];

    protected $table = "products";

    use HasFactory;


    // public static function boot()
    // {
    //     parent::boot();

    //     // Event pada saat menyimpan data
    //     static::saving(function ($category) {
    //         $category->slug = Str::slug($category->name);
    //     });
    // }

    public static function boot()
    {
        parent::boot();

        static::saving(function ($product) {
            $product->slug = Str::slug($product->product_name);
        });
    }

    // public function setImageAttribute($value)
    // {
    //     $this->attributes['image']
    // }

    // protected 

    // public function image(): Attribute
    // {
    // $batch = $this->attributes['product_batch'];
    //     return Attribute::make(
    //         get: fn (string $image, array $attributes) => asset('/storage/images/product/' . Str::slug($attributes['product_batch']) . '/' . $attributes['image'])
    //     );
    // }

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    // Product(1) to OrderDetail(many) [1 : M]

    public function orderDetail(): HasMany
    {
        return $this->hasMany(OrderDetails::class);
    }

    public function productAdminIndex()
    {
        return Product::select('slug', 'product_code', 'product_name', 'product_type', 'product_batch', 'product_price', 'product_stock', 'product_status')->latest()->paginate(10);
    }
}
