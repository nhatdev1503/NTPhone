<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductVariantController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Product;

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

Route::get('/', function () {
    return view('admin.index'); //test giao diện
});
// Route::get('/', function () {
//     return view('admin.layouts.main');
// })->name('home');

// router CRUD products (Hiếu, Nhật)
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::put('/products/{product}/destroy', [ProductController::class, 'destroy'])->name('products.destroy');
//
Route::get('products/{product}/variants', [ProductController::class, 'getVariants']);
Route::get('productvariants/{product}/create', [ProductVariantController::class, 'create']);
Route::post('productvariants/{product}/store', [ProductVariantController::class, 'store'])->name('productvariants.store');
Route::get('productvariants/{id}/edit', [ProductVariantController::class, 'edit'])->name('productvariants.edit');
Route::put('productvariants/{id}/update', [ProductVariantController::class, 'edit'])->name('productvariants.update');
Route::put('productvariants/{id}/destroy', [ProductVariantController::class, 'edit'])->name('productvariants.destroy');

//Router Danh muc, baners Quyet //
// Route::resource('categories', CategoryController::class);

//Router Danh muc Quyet //
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{id}/edit', [CategoryController::class, 'index'])->name('categories.edit');
Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::put('/categories/{id}/destroy', [CategoryController::class, 'destroy'])->name('categories.destroy');
Route::resource('banners', BannerController::class);
Route::put('/banners/{banner}', [BannerController::class, 'status'])->name('banners.status');

// QUẢN LÝ TÀI KHOẢN (USERS) (Hưng)
// =============================
Route::get('/users', [UserController::class, 'index'])->name('users.index'); // Danh sách tài khoản
Route::get('/users/create', [UserController::class, 'create'])->name('users.create'); // Form tạo tài khoản
Route::post('/users', [UserController::class, 'store'])->name('users.store'); 
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
Route::put('/users/{user}/destroy', [UserController::class, 'destroy'])->name('users.destroy'); 


// Quản lý Voucher (Minh)
Route::resource('discounts', DiscountController::class)->where(['discounts' => '[0-9]+']);

//Quản lí Đơn hàng (Nhật)
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');
Route::put('/orders/{order}', [OrderController::class, 'update'])->name('orders.update');



Route::get('/home', function () {
    $categories = Category::with('products')->take(4)->get();

    return view('giaodien_web.trangchu', compact('categories'));
})->name('web.home');


Route::get('/san-pham', function () {
    return view('giaodien_web.sanpham');
})->name('web.products');

Route::get('/danh-muc/{id}', function($id){
    $category = Category::with(['products' => function($query){
        $query->limit(24);
    }])->findOrFail($id);

    return view('giaodien_web.danhmuc', compact('category'));
})->name('web.product.category');

Route::get('/san-pham/{id}', function ($id) {
    return view('giaodien_web.sanpham_chitiet', compact('id'));
})->name('web.product.detail');

Route::get('/gio-hang', function () {
    return view('giaodien_web.giohang');
})->name('web.cart');