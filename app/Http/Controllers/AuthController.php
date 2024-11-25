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
        // Validasi input login
        $validator = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cek kredensial login
        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            $user = Auth::user(); // Ambil data pengguna yang berhasil login
            Session::put('user_role', $user->role); // Simpan role pengguna dalam session

            // Redirect berdasarkan role
            if ($user->role == 'admin') {
                return redirect('/admin/base');
            } elseif ($user->role == 'user') {
                return redirect('/');
            }
        } else {
            // Jika login gagal
            return redirect()->back()
                ->withErrors(['email' => 'Email dan password yang dimasukkan tidak sesuai.'])
                ->withInput()
                ->with('form_type', 'login'); // Tandai form login
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
        $validator = $request->validate([
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
        return redirect()->route('login')->with('pesan', 'Registrasi Berhasil. Silakan login.');
    }

    // Proses logout
    public function logout()
    {
        Auth::logout();  // Logout dari sesi
        session()->invalidate();  // Hapus sesi yang masih aktif
        session()->regenerateToken();  // Regenerasi token CSRF untuk keamanan

        // Hapus session terkait role
        Session::forget('user_role');

        // Redirect ke halaman login atau halaman depan setelah logout
        return redirect()->route('login')->with('success', 'Berhasil logout!');
    }
}
