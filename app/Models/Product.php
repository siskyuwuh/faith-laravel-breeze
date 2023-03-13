<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    protected $guarded = [
        'id',
    ];

    use HasFactory;

    public function productAdminIndex()
    {
        return Product::select('id', 'product_code', 'product_name', 'product_type', 'product_batch', 'product_price', 'product_stock', 'product_status')->latest()->paginate(12);
    }
}
