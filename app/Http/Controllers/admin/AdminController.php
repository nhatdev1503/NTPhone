<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Models\Order;
use App\Models\Product;
use App\Models\Storage;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {   
        $totalRevenue = (new Order())->total_revenue;
        $totalProducts = (new Product())->total_products;
        $totalOrders = (new Order)->total_orders;
        $totalUsers = (new User())->total_users;
        return view('admin.index',compact('totalRevenue','totalProducts','totalOrders','totalUsers'));
    }
    public function color_storage()
    { 
        $colors = Color::all();
        $storages = Storage::all();  
        return view('admin.colors_storages.index',compact('colors','storages'));
    }
}
