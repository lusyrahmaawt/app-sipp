<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AuthController extends Controller
{
    public function __construct()
    {
        // Terapkan middleware auth.admin untuk seluruh metode kecuali login dan logout
        $this->middleware('auth.admin')->except(['index', 'loginadmin', 'loginadmin_proses', 'logoutadmin']);
    }
    public function index(){
        return view('authadmin.loginadmin');
    }

    public function dashboard()
    {
        // Tambahkan middleware auth admin untuk keamanan
        $this->middleware('auth.admin');

        $admin = Admin::get();
        return view('admin.dashboard', compact('admin'));
    }

    public function loginadmin(){
        return view('authadmin.loginadmin');
    }

    public function loginadmin_proses(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('admin.loginadmin')->with('failed', 'Email atau Password Salah');
        }
    }

    public function logoutadmin(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.loginadmin')->with('success', 'Anda berhasil logout');
    }
    
}
