<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    // use HasFactory;
    use HasUuids;

    protected $guarded = [
        'id',
    ];

    // From User(1) has Order(M)
    // Belongs to User ID

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Belongs to Shipper ID

    public function shipper(): BelongsTo
    {
        return $this->belongsTo(Shipper::class);
    }

    // public function shipingInfo(): BelongsTo
    // {
    //     return $this->belongsTo(ShippingInfo::class);
    // }

    public function shipment(): HasOne
    {
        return $this->hasOne(Shipment::class);
    }

    // Order(1) has OrderDetail(Many) [1 : M]

    public function orderDetails(): HasMany
    {
        return $this->hasMany(OrderDetails::class);
    }

    public static function boot()
    {
        parent::boot();
        parent::saving(function ($order) {
            $totalOrder = 0;
            // $count = $order->
            foreach ($order->orderDetails() as $col) {
                $totalOrder = $col->order_price + $totalOrder;
            }
            $order->total_price = $totalOrder;
        });
    }
}
