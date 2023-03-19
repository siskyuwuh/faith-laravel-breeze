<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product as Item;

class CatalogController extends Controller
{
    //
    public function index(Item $item)
    {
        return view('main.catalog', [
            'items' => $item->select('product_name', 'product_type', 'product_price', 'slug')->latest()->paginate(12),
        ]);
    }

    public function detail($category, Item $item)
    {
        if ($category === $item['product_type']) {
            // dd("nice");
            return view('main.detail', [
                'item' => $item,
            ]);
        };
    }
}
