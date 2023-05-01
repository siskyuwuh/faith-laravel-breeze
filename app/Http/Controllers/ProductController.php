<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
// use Illuminate\Database\Eloquent\Collection;
// use Illuminate\Support\LazyCollection;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Product $product)
    {
        //

        return view('admin.product.index', [
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
        return view('admin.product.create', [
            'title' => 'Tambah Data Barang',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request, Product $product)
    {
        //
        $validator = Validator::make($request->all(), $request->rules(), $request->messages());




        if ($validator->stopOnFirstFailure()->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validated = $validator->validated();

        $image = $request->file('image');
        // dd($validated['product_name']);
        $imageName = time() . "_" . $image->hashName();

        $image->storeAs('public/images/product/' . Str::slug($validated['product_batch']) . '/', $imageName);

        $validated['image'] = $imageName;
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
        return redirect()->route('product.index')->with([
            'success' => 'Data Product Berhasil di Input',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.product.show', [
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
        return view('admin.product.edit', [
            'title' => 'Edit Produk',
            'product' => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
        $validator = Validator::make($request->all(), $request->rules(), $request->messages());

        if ($validator->stopOnFirstFailure()->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
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

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            // dd($validated['product_name']);
            $imageName = time() . "_" . $image->hashName();

            $image->storeAs('public/images/product/' . Str::slug($validated['product_batch']) . '/', $imageName);

            Storage::delete('public/images/product/' . Str::slug($product->product_batch) . '/' . basename($product->image));

            $validated['image'] = $imageName;


            $product->update($validated);
        } else {

            $product->update($validated);
        };

        return redirect()->route('product.index')->with(
            'success',
            'Data Berhasil diubah!'
        );
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
