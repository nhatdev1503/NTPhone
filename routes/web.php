<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('admin.products.index'); //test giao diệndiện
});
// Route::get('/', function () {
//     return view('admin.layouts.main');
// })->name('home');

// router CRUD products (Hiếu)
Route::get('/list_products', [ProductsController::class, 'index']);
Route::get('/products/low-stock', [ProductsController::class, 'lowStock'])->name('admin.products.lowStock');
Route::get('/products/inactive', [ProductsController::class, 'inactive'])->name('admin.products.inactive');
Route::patch('/products/activate/{product}', [ProductsController::class, 'activate'])->name('admin.products.activate');
Route::resource('products', ProductsController::class)->where(['product' => '[0-9]+']);


// QUẢN LÝ TÀI KHOẢN (USERS) (HưngHưng)
// =============================
Route::get('/users', [UserController::class, 'index'])->name('admin.users.index'); // Danh sách tài khoản
Route::get('/users/create', [UserController::class, 'create'])->name('admin.users.create'); // Form tạo tài khoản
Route::post('/users', [UserController::class, 'store'])->name('admin.users.store'); 
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
Route::put('/users/{user}', [UserController::class, 'update'])->name('admin.users.update'); 
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy'); 