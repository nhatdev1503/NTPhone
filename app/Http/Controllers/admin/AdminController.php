<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Models\Storage;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function color_storage()
    { 
        $colors = Color::all();
        $storages = Storage::all();  
        return view('admin.colors_storages.index',compact('colors','storages'));
    }
}
