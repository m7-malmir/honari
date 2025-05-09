<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // فرم ورود
    public function loginForm()
    {
        return view('admin.login');
    }

    // پردازش ورود
    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::guard('admin')->attempt($validated)) {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->back()->withErrors(['error' => 'ورود ناموفق. لطفاً اطلاعات را صحیح وارد کنید.']);
    }

    // داشبورد پنل مدیریت
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    // خروج از پنل
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}

