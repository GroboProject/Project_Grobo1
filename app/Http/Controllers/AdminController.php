<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin.base'); // Pastikan file base.blade.php ada di resources/views
    }
}
