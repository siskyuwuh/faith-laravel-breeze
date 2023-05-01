<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Shipper extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public $timestamps = false;

    public function shipments(): HasMany
    {
        return $this->hasMany(Shipment::class);
    }

    public function paymentInfo(): HasMany
    {
        return $this->hasMany(PaymentInfo::class);
    }
}
