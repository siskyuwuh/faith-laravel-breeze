<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Shipment extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    const CREATED_AT = 'shipment_date';
    const UPDATED_AT = 'updated_date';

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function ShippingInfo(): BelongsTo
    {
        return $this->belongsTo(ShippingInfo::class);
    }
}
