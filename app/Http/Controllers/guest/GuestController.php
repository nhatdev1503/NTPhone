<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        return view('guest.index');
    }
    public function warranty()
    {
        return view('guest.warranty');
    }
    public function contact()
    {
        return view('guest.contact');
    }
}
