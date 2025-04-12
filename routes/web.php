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
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\auth\ForgotPasswordController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\auth\ResetPasswordController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\Customer\ProfileController as CustomerProfileController;
use App\Http\Controllers\guest\GuestController;
use App\Http\Controllers\guest\OrderLookupController;
use App\Http\Controllers\customer\CustomerController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\staff\StaffController;
use App\Http\Controllers\StorageController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customer\CustomerOrderController;
use App\Http\Controllers\Customer\RatingController;
use App\Http\Controllers\customer\CommentController;
use App\Http\Controllers\admin\NewsController;
use App\Http\Controllers\customer\NewController;

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

    // Thông tin cá nhân và đổi mật khẩu
    Route::get('/profile', [ProfileController::class, 'index'])->name('admin.profile');
    Route::put('/profile', [ProfileController::class, 'update'])->name('admin.profile.update');
    Route::get('/change-password', [ProfileController::class, 'changePassword'])->name('admin.change-password');
    Route::put('/change-password', [ProfileController::class, 'updatePassword'])->name('admin.change-password.update');

    // router CRUD products (Hiếu, Nhật)
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/inactive', [ProductController::class, 'inactive'])->name('products.inactive');
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
    Route::put('/priority/{product}', [ProductController::class, 'priority'])->name('products.priority');
    Route::delete('/products/{product}', [ProductController::class, 'delete'])->name('products.delete');

    // Routes for deleting ratings and comments
    Route::delete('/order-items/{orderItem}/delete-rating', [ProductController::class, 'deleteRating'])->name('admin.order-items.delete-rating');
    Route::delete('/comments/{comment}', [ProductController::class, 'deleteComment'])->name('admin.comments.destroy');

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
    Route::get('/users/locked', [UserController::class, 'locked'])->name('users.locked');
    Route::put('/users/{user}/lock', [UserController::class, 'lock'])->name('users.lock');
    Route::put('/users/{user}/unlock', [UserController::class, 'unlock'])->name('users.unlock');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}/update', [UserController::class, 'update'])->name('users.update');

    // // Quản lý Voucher (Minh)
    Route::resource('discounts', DiscountController::class)->where(['discounts' => '[0-9]+']);

    // //Quản lí Liên hệ
    Route::resource('contacts', ContactController::class);

    // //Quản lí bài viết
    Route::resource('posts', PostController::class);

    Route::get('/chat', [ChatController::class, 'index'])->name('chat.index');
    Route::post('/chat/send-message', [ChatController::class, 'sendMessage'])->name('chat.send-message');
    Route::post('/chat/get-room-id', [ChatController::class, 'getRoomId'])->name('chat.get-room-id');
    Route::post('/chat/get-data', [ChatController::class, 'getDataChatAdmin'])->name('chat.getDataChatAdmin');
    Route::post('/chat/message/delete', [ChatController::class, 'deleteMessage'])->name('chat.message.delete');


    // Quản lí bài viết ( New)
    Route::get('news', [NewsController::class, 'index'])->name('news.index');


    Route::get('news/create', [NewsController::class, 'create'])->name('news.create');
    Route::post('/news/upload-images', [NewsController::class, 'uploadImages'])->name('news.upload_images');


    Route::post('/admin/news/upload-editor-image', [NewsController::class, 'uploadEditorImage']);
    Route::post('news', [NewsController::class, 'store'])->name('news.store');
    Route::get('news/{news}/edit', [NewsController::class, 'edit'])->name('news.edit');
    Route::put('news/{news}', [NewsController::class, 'update'])->name('news.update');
    Route::delete('news/{news}', [NewsController::class, 'destroy'])->name('news.destroy');
});

//Route trang nhân viên
Route::middleware(['auth', 'role:staff'])->prefix('staff')->group(function () {
    // Trang Dashboard Admin
    Route::get('/dashboard', [StaffController::class, 'index'])->name('staff.index');
});

//Route trang khách hàng
Route::middleware(['auth', 'role:customer'])->prefix('customer')->group(function () {

    // chat
    Route::post('/send-message', [ChatController::class, 'sendMessage'])->name('chatClient.sendMessage');
    Route::post('/getDataChatClient', [ChatController::class, 'getDataChatClient'])->name('chat.getDataChatClient');
    // Trang Dashboard Customer
    Route::get('/dashboard', [CustomerController::class, 'index'])->name('customer.index');
    Route::get('/payment', [CustomerController::class, 'payment'])->name('customer.payment');
    Route::post('/payment', [CustomerController::class, 'postPayment'])->name('customer.postPayment');
    Route::get('/cart', [CustomerController::class, 'cart'])->name('customer.cart');
    Route::post('/cart', [CustomerController::class, 'postCart'])->name('customer.postCart');
    Route::get('/buynow', [CustomerController::class, 'buynow'])->name('customer.buynow');

    // Trang danh mục
    Route::get('/categories/{id}', [CustomerController::class, 'categories'])->name('customer.category');

    // Lọc sản phẩm theo danh mục
    Route::get('/filter/categories/{id}', [CustomerController::class, 'filterByCategory'])->name('customer.filter');

    // Lọc sản phẩm
    Route::get('/filter', [CustomerController::class, 'filter'])->name('customer.filters');

    // Trang tìm kiếm
    Route::post('/search', [CustomerController::class, 'search'])->name('customer.search');

    // Product detail
    Route::get('/product_detail/{id}', [CustomerController::class, 'product_detail'])->name('customer.product_detail');
    Route::get('/product_detail/{id}', [CustomerController::class, 'product_detail'])
        ->name('customer.product_detail');
    //rating
    Route::post('/ratings', [RatingController::class, 'store'])->name('customer.ratings.store');

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
    Route::get('/customer/order-history', [CustomerOrderController::class, 'history'])->name('order.history');

    // Chi tiết bài viết
    Route::get('/post/detail/{id}', [CustomerController::class, 'post_detail'])->name('customer.post_detail');
    //  bài viết (newnew)
    Route::get('/news', [NewController::class, 'index'])->name('customer.news');
    Route::get('/shownew/{id}', [NewController::class, 'show'])->name('customer.show');

    Route::post('/posts/{id}/comments', [NewsController::class, 'storeComment'])->name('comments.store');

    // Route giỏ hàng
    Route::get('/api/storages_by_color/{product_id}/{color}', [CustomerController::class, 'apiStoragesByColor'])->name('api.customer.storages_by_color');
    Route::post('/cart/update/{id}', [CustomerController::class, 'updateCartQuantity'])->name('customer.cart.updateQuantity');
    Route::delete('/cart/delete/{id}', [CustomerController::class, 'deleteCartItem'])->name('customer.cart.delete');
    Route::post('/cart/update-variant', [CustomerController::class, 'updateCartVariant'])->name('customer.cart.updateVariant');
    Route::post('/cart/checkout', [CustomerController::class, 'cart_checkout'])->name('customer.cart.checkout');
    Route::delete('/customer/cart/delete/{id}', [CustomerController::class, 'delete'])->name('customer.cart.delete');
    // Ví dụ cho trang thông báo kết quả đơn hàng
    Route::get('/order/success', function () {
        return view('customer.order_success');
    })->name('customer.order.success');
    // Route::get('/order/vnpay', function () {
    //     return view('customer.order_vnpay');
    // })->name('customer.order.vnpay');
    Route::get('/order/vnpay/callback', [CustomerController::class, 'vnpayCallback'])->name('customer.order.vnpay.callback');
    Route::get('/order/success', function () {
        return view('customer.order_success');
    })->name('customer.order.success');
    Route::match(['GET', 'POST'], '/cart/proceed-to-checkout', [CustomerController::class, 'proceedToCheckout'])->name('customer.cart.proceed-to-checkout');

    // Cart routes
    Route::get('/cart', [CustomerController::class, 'cart'])->name('customer.cart');
    Route::post('/cart/add', [CustomerController::class, 'postCart'])->name('customer.cart.add');
    Route::delete('/cart/delete/{id}', [CustomerController::class, 'deleteCartItem'])->name('customer.cart.delete');
    Route::get('/cart/check-status/{id}', [CustomerController::class, 'checkProductStatus'])->name('customer.cart.check-status');
    Route::post('/cart/check-stock/{id}', [CustomerController::class, 'checkStock'])->name('customer.cart.check-stock');
    Route::post('/cart/checkout', [CustomerController::class, 'cart_checkout'])->name('customer.cart.checkout');
    Route::post('/buy-now-direct', [CustomerController::class, 'proceedDirectlyToCheckout'])->name('customer.buyNowDirect');
    Route::post('/cart/update-quantity/{cartId}', [CustomerController::class, 'updateCartQuantity'])->name('cart.updateQuantity');

    // Order routes
    Route::get('/order/{id}', [CustomerController::class, 'orderDetail'])->name('order_detail');
    Route::post('/order/{id}/cancel', [CustomerController::class, 'cancelOrder'])->name('order.cancel');
    Route::post('/order/{id}/confirm', [CustomerController::class, 'confirmOrder'])->name('order.confirm');
    Route::post('/customer/review', [CustomerOrderController::class, 'submitReview'])->name('customer.submitReview');

    Route::get('/profile', [CustomerProfileController::class, 'index'])->name('customer.profile');
    Route::put('/profile', [CustomerProfileController::class, 'updateProfile'])->name('customer.profile.update');
    Route::get('/change-password', [CustomerController::class, 'changePassword'])->name('customer.change_password');
    Route::put('/change-password', [CustomerController::class, 'updatePassword'])->name('customer.change_password.update');
    Route::get('/order-history', [CustomerController::class, 'orderHistory'])->name('customer.order.history');
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

Route::middleware(['auth'])->group(function () {
    Route::get('/order-detail/{id}', [CustomerOrderController::class, 'show'])->name('customer.order_detail');
    Route::get('/cart', [CustomerController::class, 'cart'])->name('customer.cart');
    Route::post('/cart/checkout', [CustomerController::class, 'cart_checkout'])->name('customer.cart.checkout');
    Route::delete('/cart/delete/{id}', [CustomerController::class, 'deleteCartItem'])->name('customer.cart.delete');
});

Route::middleware('auth')->group(function () {
    Route::get('/chats', [ChatController::class, 'getChats']);
    Route::get('/messages/{userId}', [ChatController::class, 'getMessages']);
    Route::post('/send-message', [ChatController::class, 'sendMessage']);
});
//product_detail---------------------------------------------------------------------
Route::get('/api/get-product-images', [ProductController::class, 'getProductImages']);
Route::get('/get-available-colors', [CustomerController::class, 'getAvailableColors']);
Route::get('/api/get-price', [CustomerController::class, 'getPrice'])->name('customer.getPrice');
Route::get('/api/revenue', [App\Http\Controllers\Admin\RevenueController::class, 'getRevenue']);
Route::get('/api/top-products', [App\Http\Controllers\Admin\StatisticsController::class, 'getTopProducts']);
Route::get('/api/check-stock', [App\Http\Controllers\Customer\ProductController::class, 'checkStock']);

Route::post('/comments', [CommentController::class, 'store'])->name('customer.comments.store')->middleware('auth');
