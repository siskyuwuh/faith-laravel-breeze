<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    //

    public function saveShippingInfo()
    {
        // Shipping Info Save
    }

    public function cart()
    {
        return view('main.cart', [
            'title' => 'Keranjang',
        ]);
    }

    public function addToCart(Product $product, Request $request)
    {
        // $filter = $request->all();
        // $selector = $product->where('slug', $slug)->where('product_color', $filter['color'])->first();

        $id = $product->id;
        // dd($id = $product->id);
        // Ambil session "cart" dgn val = []
        $cart = session()->get('cart', []);

        // Cek apakah cart ada yang sama
        if (isset($cart[$id])) {

            // Jika ada yg sama, tambahkan qty-nya
            $cart[$id]['quantity']++;

            // unset($cart[$request->id]);

            // session()->put('cart', $cart);
        } else {

            // Jika tidak isi, value [] dar session cart/$cart
            $cart[$id] = [
                "name" => $product->product_name,
                "quantity" => 1,
                "price" => $product->product_price,
            ];
        }

        // Buat session cart, dan masukkan isinya dengan $cart sebelumnya
        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function updateCart($operator, $id)
    {
        $cart = session()->get('cart');
        if ($operator === 'tambah') {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back();
        }
        if ($operator === 'kurang') {
            $cart[$id]['quantity']--;
            session()->put('cart', $cart);
            return redirect()->back();
        }
    }

    public function removeCart($id)
    {

        $cart = session()->get('cart');
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Product Removed!');
    }

    // public function buy($item, Product $product, Request $request)
    // {
    //     $filter = $request->validate([
    // 'size' => ['string', 'required'],
    //     'color' => ['string', 'required'],
    // ]);
    // dd($selector = $product->where('slug', $item)->where('product_color', $filter['color'])->first());
    // $selector = $product->where('slug', $item)->where('product_color', $filter['color'])->first();
    // dd($selector->id);
    //     return redirect()->route('checkout.form', [$selector->id]);
    // }

    public function updateCreate()
    {
        return view('main.address', [
            'title' => 'Form Info Pengiriman'
        ]);
    }

    public function checkoutForm(Request $request)
    {
        // dd($request->fullUrl());
        if (session('cart')) {

            session()->flash('backUrl', $request->fullUrl());


            return view('main.order', [
                'title' => 'Checkout Form',
                // 'product' => Product::find($item),
            ]);
        } else {

            return redirect()->route('catalog')->with([
                'alert' => 'Belanja terlebih dahulu',
            ]);
        }
    }


    public function order(Request $request, Order $order, OrderDetails $orderDetails)
    {
        # Input Data Order
        // $cart = session()->get('cart');
        dd($cart = session()->get('cart'));
        $totalPrice = 0;
        foreach ($cart as $id => $item) {
            $totalPrice += $item['price'] * $item['quantity'];
        }
    }
}
