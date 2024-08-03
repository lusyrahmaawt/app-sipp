<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\PasswordResetToken;
use App\Mail\ResetPasswordMail;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'login', 'login_proses', 'forgot_password', 'forgot_password_act', 'validasi_forgot_password', 'register', 'register_proses']);
    }

    public function index()
    {
        return view('auth.login');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function login_proses(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('beranda');
        } else {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
    }
    
    public function beranda()
    {
        // Tambahkan middleware auth admin untuk keamanan
        $this->middleware('auth');

        $data = User::get();
        return view('beranda', compact('data'));
    }


    public function forgot_password()
    {
        return view('auth.forgot-password');
    }

    public function forgot_password_act(Request $request)
    {
        $customMessage = [
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email tidak valid',
            'email.exists' => 'Email tidak terdaftar di database',
        ];
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ], $customMessage);

        $token = \Str::random(60);

        PasswordResetToken::updateOrCreate(
            [
                'email' => $request->email
            ],
            [
                'email' => $request->email,
                'token' => $token,
                'created_at' => now(),
            ]
        );

        Mail::to($request->email)->send(new ResetPasswordMail($token));

        return redirect()->route('forgot-password')->with('success', 'Kami telah mengirimkan link reset password ke email anda');
    }

    public function validasi_forgot_password_act(Request $request)
    {
        $customMessage = [
            'password.required' => 'Password tidak boleh kosong',
            'password.min' => 'Password minimal 8 karakter',
        ];

        $request->validate([
            'password' => 'required|min:8',
        ], $customMessage);

        $token = PasswordResetToken::where('token', $request->token)->first();

        if (!$token) {
            return redirect()->route('login')->with('failed', 'Token tidak valid');
        }

        $user = User::where('email', $token->email)->first();

        if (!$user) {
            return redirect()->route('login')->with('failed', 'Token tidak valid');
        }

        $user->update([
            'password' => Hash::make($request->password),
        ]);

        $token->delete();
        return redirect()->route('login')->with('success', 'Password berhasil diubah');
    }

    public function validasi_forgot_password(Request $request, $token)
    {
        $getToken = PasswordResetToken::where('token', $token)->first();

        if (!$getToken) {
            return redirect()->route('login')->with('failed', 'Token tidak valid');
        }

        return view('auth.validasi-token', compact('token'));
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Anda berhasil logout');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function register_proses(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:8',
            'nik' => 'required',
            'nama_usaha' => 'required',
            'jenis_usaha' => 'required',
            'alamat_usaha' => 'required',
            'no_whatsapp' => 'required',
        ]);

        $data = [
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'nik' => $request->nik,
            'nama_usaha' => $request->nama_usaha,
            'jenis_usaha' => $request->jenis_usaha,
            'alamat_usaha' => $request->alamat_usaha,
            'no_whatsapp' => $request->no_whatsapp,
        ];

        User::create($data);

        return redirect()->route('login')->with('success', 'Anda berhasil register');
    }
}
