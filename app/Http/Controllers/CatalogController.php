<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product as Item;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

class CatalogController extends Controller
{
    //
    public function index(Item $item, Request $request)
    {
        if ($filterBatch = $request->batch) {
            $category = DB::table('products')->select('id', 'image', 'product_name', 'product_type', 'product_batch', 'product_price', 'slug')->when($filterBatch, function (Builder $query, String $filterBtach) {
                $query->where('product_batch', $filterBtach)->get();
            });
            return view('main.catalog', [
                'items' => $category->latest()->paginate(12),
            ]);
        }

        return view('main.catalog', [
            'items' => $item->select('id', 'image', 'product_name', 'product_type', 'product_batch', 'product_price', 'slug')->latest()->paginate(12),
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
        return redirect()->route('catalog')->with([
            'pesan' => 'barang tidak ada',
        ]);
    }
}
