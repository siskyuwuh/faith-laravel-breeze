<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ShippingInfoController;
use App\Http\Controllers\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog');
Route::get('/category/{category}/item/{item}', [CatalogController::class, 'detail'])->name('detail.product');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'user-access:customer'])->group(function () {
    Route::post('/order', [OrderController::class, 'order'])->name('item.order');
    Route::get('/checkout', [OrderController::class, 'checkoutForm'])->name('checkout.form');
    Route::get('cart', [OrderController::class, 'cart'])->name('cart');
    Route::get('add-to-cart/{product}', [OrderController::class, 'addToCart'])->name('add.to.cart');
    Route::put('/update/{operator}/item/{id}', [OrderController::class, 'updateCart'])->name('updateCart');
    Route::delete('delete-from-cart/{id}', [OrderController::class, 'removeCart'])->name('remove.cart');
    Route::get('address', [ShippingInfoController::class, 'index'])->name('address.index');
    Route::get('address/create', [ShippingInfoController::class, 'create'])->name('address.create');
    Route::post('address/store', [ShippingInfoController::class, 'store'])->name('address.store');
});


Route::middleware(['auth', 'user-access:admin'])->group(function () {

    // Dashboard Admin
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // CRUD Product
    Route::resource('/admin/product', ProductController::class);
    // Route::get('/product/{product:slug}', [ProductController::class, 'show'])->name('show');
});

require __DIR__ . '/auth.php';
