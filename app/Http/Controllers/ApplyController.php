<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApplyController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'business_type' => 'required|string',
            'company_website' => 'required|url',
            'work_email' => 'required|email|max:255',
            'message' => 'nullable|string|max:500',
        ]);

        // Simpan data ke database
        DB::table('request')->insert([
            'company_name' => $request->input('company_name'),
            'business_type' => $request->input('business_type'),
            'company_website' => $request->input('company_website'),
            'work_email' => $request->input('work_email'),
            'message' => $request->input('message'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Pendaftaran berhasil dikirim!');
    }
}
