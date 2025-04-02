<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\BannerController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\DiscountController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\ProductVariantController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\auth\ForgotPasswordController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\auth\ResetPasswordController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\guest\GuestController;
use App\Http\Controllers\guest\OrderLookupController;
use App\Http\Controllers\customer\CustomerController;
use App\Http\Controllers\staff\StaffController;
use App\Http\Controllers\StorageController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customer\CustomerOrderController;
use App\Http\Controllers\Customer\RatingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|x
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route trang đăng nhập
Route::get('/', function () {
    return redirect()->route('login');
});
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('auth.login');

// Route đăng ký
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('auth.register');

// Route đăng xuất
Route::post('/logout', [LoginController::class, 'logout'])->name('auth.logout');

// Route quên mật khẩu
Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

// Route lấy lại mật khẩu
Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

// Phân quyền sau khi đăng nhập

Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    // Trang Dashboard Admin
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.index');

    // router CRUD products (Hiếu, Nhật)
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
    Route::put('/products/{product}/destroy', [ProductController::class, 'destroy'])->name('products.destroy');
    Route::get('/products/{product}/variants', [ProductController::class, 'getVariants']);
    Route::get('/productvariants/{product}/create', [ProductVariantController::class, 'create']);
    Route::post('/productvariants/{product}/store', [ProductVariantController::class, 'store'])->name('productvariants.store');
    Route::get('/productvariants/{id}/edit', [ProductVariantController::class, 'edit'])->name('productvariants.edit');
    Route::put('/productvariants/{id}/update', [ProductVariantController::class, 'edit'])->name('productvariants.update');
    Route::put('/productvariants/{id}/destroy', [ProductVariantController::class, 'edit'])->name('productvariants.destroy');

    // //Router Danh muc Quyet //
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
    Route::put('/categories/{id}/destroy', [CategoryController::class, 'destroy'])->name('categories.destroy');

    //Quản lí banner
    Route::resource('banners', BannerController::class);
    Route::put('/banners/{banner}/status', [BannerController::class, 'status'])->name('banners.status');
    Route::get('/api/product_url', [BannerController::class, 'apiProductURL']);

    //Quản lí màu sắc, dung lượng
    Route::get('/colors_storages', [AdminController::class, 'color_storage'])->name('colors_storages.index');
    Route::resource('colors', ColorController::class);
    Route::resource('storages', StorageController::class);

    // //Quản lí Đơn hàng (Nhật)
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');
    Route::put('/orders/{order}', [OrderController::class, 'update'])->name('orders.update');

    // // QUẢN LÝ TÀI KHOẢN (USERS) (Hưng)
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::put('/users/{user}/destroy', [UserController::class, 'destroy'])->name('users.destroy');

    // // Quản lý Voucher (Minh)
    Route::resource('discounts', DiscountController::class)->where(['discounts' => '[0-9]+']);

    // //Quản lí Liên hệ
    Route::resource('contacts', ContactController::class);
});

//Route trang nhân viên
Route::middleware(['auth', 'role:staff'])->prefix('staff')->group(function () {
    // Trang Dashboard Admin
    Route::get('/dashboard', [StaffController::class, 'index'])->name('staff.index');
});

//Route trang khách hàng
Route::middleware(['auth', 'role:customer'])->prefix('customer')->group(function () {
    // Trang Dashboard Customer
    Route::get('/dashboard', [CustomerController::class, 'index'])->name('customer.index');
    Route::get('/payment', [CustomerController::class, 'payment'])->name('customer.payment');
    Route::post('/payment', [CustomerController::class, 'postPayment'])->name('customer.postPayment');
    Route::get('/cart', [CustomerController::class, 'cart'])->name('customer.cart');
    Route::post('/cart', [CustomerController::class, 'postCart'])->name('customer.postCart');



    // Trang danh mục
    Route::get('/categories/{id}', [CustomerController::class, 'categories'])->name('customer.category');

    // Product detail
    // Route::get('/product_detail/{id}', [CustomerController::class, 'product_detail'])->name('customer.product_detail');
    Route::get('/product_detail/{id}', [CustomerController::class, 'product_detail'])
        ->name('customer.product_detail');
    //rating

    // Gửi đánh giá sản phẩm
    Route::post('/rate-product/{productId}', [RatingController::class, 'storeRating'])->name('customer.rate.store');

    Route::get('/product/{productId}/ratings', [RatingController::class, 'getRatings'])->name('customer.rate.list');

    Route::put('/rate-product/{productId}', [RatingController::class, 'updateRating'])->name('customer.rate.update');

    Route::delete('/rate-product/{productId}', [RatingController::class, 'deleteRating'])->name('customer.rate.delete');
    // Bao hanhhanh
    Route::get('/warranty', [CustomerController::class, 'warranty'])->name('customer.warranty');
    // Bao contactcontact
    Route::get('/contact', [CustomerController::class, 'contact'])->name('customer.contact');
    // Route giỏ hàng

    Route::get('/api/storages_by_color/{product_id}/{color}', [CustomerController::class, 'apiStoragesByColor'])->name('api.customer.storages_by_color');

    // Lịch sử mua hàng
    Route::get('/order-history', [CustomerOrderController::class, 'history'])->name('customer.order.history');

    // Chi tiết bài viết
    Route::get('/post/detail/{id}', [CustomerController::class, 'post_detail'])->name('customer.post_detail');
    // Trang thông tin cá nhân (profile)
    Route::get('/profile', [\App\Http\Controllers\customer\ProfileController::class, 'index'])
        ->name('customer.profile');

    // Route xử lý cập nhật thông tin profile (POST)
    Route::post('/profile/update', [\App\Http\Controllers\customer\ProfileController::class, 'update'])
        ->name('customer.profile.update');
});


//Route trang khách vãng lai
Route::prefix('guest')->group(function () {
    //Tra cuu don hang
    Route::get('/order-lookup', [OrderLookupController::class, 'lookup'])->name('guest.orders.lookup');
    Route::get('/api/order-lookup/{order_code}', [OrderLookupController::class, 'apiLookup'])->name('guest.orders.apiLookup');
    Route::get('/order-lookup/{order_code}', [OrderLookupController::class, 'show'])->name('guest.orders.show');

    // Bao hanhhanh
    Route::get('/warranty', [GuestController::class, 'warranty'])->name('guest.warranty');
    // Bao contactcontact
    Route::get('/contact', [GuestController::class, 'contact'])->name('guest.contact');
});


Route::prefix('customer')->group(function () {
    // Lịch sử mua hàng
    Route::get('/order-history', [CustomerOrderController::class, 'history'])->name('customer.order.history');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/order-detail/{id}', [CustomerOrderController::class, 'show'])->name('customer.order_detail');
});


//product_detail---------------------------------------------------------------------
Route::get('/api/get-product-images', [ProductController::class, 'getProductImages']);
Route::get('/get-available-colors', [CustomerController::class, 'getAvailableColors']);
Route::get('/api/get-price', [CustomerController::class, 'getPrice']);
