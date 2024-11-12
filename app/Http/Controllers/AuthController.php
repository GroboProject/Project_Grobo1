<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('login');
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6', 
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi'

        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        // Menggunakan 'remember me' 
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->remember)) {
            $user = Auth::user(); // Dapatkan informasi pengguna yang berhasil login
            Session::put('user_role', $user->role); // Simpan hak akses pengguna dalam sesi

            // Redirect berdasarkan role
            if ($user->role == 'admin') {
                return redirect('/admin');
            } elseif ($user->role == 'user') {
                return redirect('/');
            }
        } else {
            // jika gagal login
            return redirect()->back()->withErrors(['email' => 'Username dan password yang dimasukkan tidak sesuai'])->withInput();
        }
    }

    // Menampilkan form registrasi
    public function showRegistrationForm()
    {
        return view('register');
    }

    // Proses registrasi
    public function register(Request $request)
    {
        // Validasi input registrasi
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:6', 
        ]);

        // Buat user baru
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'user',  // Atur role default
            'password' => bcrypt($request->password),
        ]);

        // Redirect ke halaman login setelah registrasi sukses
        return redirect()->route('login')->with('pesan', 'Registrasi Berhasil. Silahkan login.');
    }

    // Proses logout
    public function logout()
    {
        Auth::logout();
        // Menghapus session user_role
        Session::forget('user_role');

        // Redirect ke halaman login setelah logout
        return redirect()->route('dashboard')->with('success', 'Berhasil logout!');
    }
}
