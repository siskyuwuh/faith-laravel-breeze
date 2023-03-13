<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Product $product)
    {
        //
        return view('product', [
            'title' => 'Produk List',
            'products' => $product->productAdminIndex(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('store', [
            'title' => 'Tambah Data Barang',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request, Product $product)
    {
        //
        $validator = Validator::make($request->all(), $request->rules());

        if ($validator->stopOnFirstFailure()->fails()) {
            return redirect('/product/create')->withErrors($validator)->withInput();
        }
        $validated = $validator->validated();
        // Status 
        // 1 = Safe
        // 0 = Empty
        if ($validated['product_stock'] > 0) {

            $validated['product_status'] = 1;
        } elseif ($validated['product_stock'] <= 0) {

            $validated['product_status'] = 0;
        }

        $product->create($validated);

        // $validated = $validated->safe()->all();
        return redirect('/product')->with([
            'success' => 'Data Product Berhasil di Input',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('show', [
            'product' => $product,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
        // dd($productStore->productAdminEdit($id));
        return view('edit', [
            'title' => 'Edit Produk',
            'product' => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, $id)
    {
        //
        $validator = Validator::make($request->all(), $request->rules());

        // if ($validator->stopOnFirstFailure()->fails()) {
        //     return redirect()->route('product.edit')->withErrors($validator)->withInput();
        // }

        $validated = $validator->validated();

        // Status 
        // 1 = Safe
        // 0 = Empty
        if ($validated['product_stock'] > 0) {

            $validated['product_status'] = 1;
        } elseif ($validated['product_stock'] <= 0) {

            $validated['product_status'] = 0;
        }


        $product = Product::findOrFail($id);

        $product->update($validated);

        return redirect('/product')->with([
            'success' => 'Data Berhasil diubah!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {

        $product->delete();

        return redirect()->route('product.index')->with([
            'success' => 'Data Berhasil di Hapus',
        ]);
    }
}