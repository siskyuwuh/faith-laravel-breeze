<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderDetails extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public $timestamps = false;

    // Belongs to Order
    // From Order

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    // Belongs to Product
    // From Order

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public static function boot()
    {
        parent::boot();
        parent::saving(function ($orderDetail) {
            $orderDetail->order_price = $orderDetail->quantity * $orderDetail->product()->product_price;
        });
    }
}
