<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{   
    public function showLoginForm(){
        if (Auth::check()) {
            switch (Auth::user()->role) {
                case 'admin':
                    return redirect()->route('admin.index');
                case 'staff':
                    return redirect()->route('staff.index');
                default:
                    return redirect()->route('customer.index');
            }
        }
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Điều hướng theo Role
            switch ($user->role) {
                case 'admin':
                    return redirect()->route('admin.index');
                case 'staff':
                    return redirect()->route('staff.index');
                default:
                    return redirect()->route('customer.index');
            }
        }

        return back()->withErrors(['message' => 'Thông tin đăng nhập không chính xác.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
