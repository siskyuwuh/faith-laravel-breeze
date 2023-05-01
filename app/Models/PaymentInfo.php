<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PaymentInfo extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
    public function shipper(): HasOne
    {
        return $this->hasOne(shipper::class);
    }
    public function order(): HasOne
    {
        return $this->hasOne(Order::class);
    }
}
