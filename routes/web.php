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
use App\Http\Controllers\guest\OrderLookupController;
use App\Http\Controllers\customer\CustomerController;
use App\Http\Controllers\staff\StaffController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

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
//Route trang tra cứu đơn hàng

Route::get('/tra-cuu-don-hang', [OrderLookupController::class, 'lookup'])->name('customer.orders.lookup');
Route::post('/tim-kiem-don-hang', [OrderLookupController::class, 'redirect'])->name('customer.orders.redirect');
Route::get('/don-hang/{order_code}', [OrderLookupController::class, 'show'])->name('customer.orders.show');
Route::get('/order-lookup', [OrderLookupController::class, 'lookup'])->name('guest.orders.lookup');


// Route trang đăng nhập
Route::get('/', function () {
    return redirect()->route('login');
});
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('auth.login');

// Route đăng ký
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

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
    Route::get('/categories/{id}/edit', [CategoryController::class, 'index'])->name('categories.edit');
    Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
    Route::put('/categories/{id}/destroy', [CategoryController::class, 'destroy'])->name('categories.destroy');

    //Quản lí banner
    Route::resource('banners', BannerController::class);
    Route::put('/banners/{banner}', [BannerController::class, 'status'])->name('banners.status');

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
    Route::get('/contacts', [ContactController::class, 'show'])->name('contacts.show');
    Route::get('/contacts/edit', [ContactController::class, 'edit'])->name('contacts.edit');
    Route::put('/contacts/update', [ContactController::class, 'update'])->name('contacts.update');

});

//Route trang nhân viên
Route::middleware(['auth', 'role:staff'])->prefix('staff')->group(function () {
    // Trang Dashboard Admin
    Route::get('/dashboard', [StaffController::class, 'index'])->name('staff.index');

});

//Route trang khách hàng
Route::prefix('customer')->group(function () {
    // Trang Dashboard Admin
    Route::get('/dashboard', [CustomerController::class, 'index'])->name('customer.index');

    // Trang danh mục
    Route::get('/categories/{id}', [CustomerController::class, 'categories'])->name('customer.category');

    // Bao hanhhanh
    Route::get('/warranty', [CustomerController::class, 'warranty'])->name('customer.warranty');
    // Bao contactcontact
    Route::get('/contact', [CustomerController::class, 'contact'])->name('customer.contact');

});


// //---------------------------------------------------------------------
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
//---------------------------------------------------------------------
Route::get('/gio-hang', function () {
    return view('giaodien_web.giohang');
})->name('web.cart');
