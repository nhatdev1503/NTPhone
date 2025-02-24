<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;
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
//Router Danh muc Quyet //
Route::resource('admin/categories', CategoryController::class);



