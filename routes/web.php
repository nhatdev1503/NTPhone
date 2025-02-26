<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VoucherController;

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

// router CRUD products (Hiếu)
Route::get('/list_products', [ProductController::class, 'index']);
Route::get('/products/low-stock', [ProductController::class, 'lowStock'])->name('admin.products.lowStock');
Route::get('/products/inactive', [ProductController::class, 'inactive'])->name('admin.products.inactive');
Route::patch('/products/activate/{product}', [ProductController::class, 'activate'])->name('admin.products.activate');
Route::resource('products', ProductController::class)->where(['product' => '[0-9]+']);
//Router Danh muc Quyet //

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::post('/categories/{id}/update', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');




// QUẢN LÝ TÀI KHOẢN (USERS) (Hưng)
// =============================
Route::get('/users', [UserController::class, 'index'])->name('admin.users.index'); // Danh sách tài khoản
Route::get('/users/create', [UserController::class, 'create'])->name('admin.users.create'); // Form tạo tài khoản
Route::post('/users', [UserController::class, 'store'])->name('admin.users.store'); 
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
Route::put('/users/{user}', [UserController::class, 'update'])->name('admin.users.update'); 
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy');

// Quản lý Voucher (Minh)
Route::get('/voucher', [VoucherController::class, 'index'])->name('admin.allVoucher');
Route::get('/voucher/create', [VoucherController::class, 'create'])->name('admin.createVoucher');
Route::post('/voucher/post', [VoucherController::class, 'store'])->name('admin.postVoucher');
Route::delete('/voucher/delete/{discount}', [VoucherController::class, 'destroy'])->name('admin.deleteVoucher');