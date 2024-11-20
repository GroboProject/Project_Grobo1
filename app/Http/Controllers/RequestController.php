<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RequestController extends Controller
{
    // Menampilkan halaman request user
    public function showUserRequest()
    {
        return view('request');
    }

    // Menangani pengiriman request oleh user
    public function submitRequest(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'companyName' => 'required|string|max:255',
            'businessType' => 'required',
            'companyWebsite' => 'required|url',
            'workEmail' => 'required|email',
            'message' => 'nullable|string',
        ]);

        // Simpan ke database (tabel request)
        DB::table('request')->insert([
            'company_name' => $validated['companyName'],
            'business_type' => $validated['businessType'],
            'company_website' => $validated['companyWebsite'],
            'work_email' => $validated['workEmail'],
            'message' => $validated['message'],
            'status' => 'pending',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('user.request')->with('success', 'Permintaan telah dikirim dan menunggu verifikasi admin.');
    }

    // Menampilkan daftar permintaan di halaman admin
    public function showAdminRequest()
    {
        // Mengambil data request dari database
        $request = DB::table('request')->where('status', 'pending')->get();

        // Mengirimkan data ke view
        return view('admin.request', compact('request'));
    }


    // Menampilkan detail permintaan
    public function showRequestDetail($id)
    {
        $request = DB::table('request')->find($id);

        if (!$request) {
            abort(404, 'Permintaan tidak ditemukan');
        }

        return view('admin.detailCompany', compact('request'));
    }

    // Memverifikasi atau menolak permintaan
    public function verifyRequest(Request $request, $id)
    {
        $action = $request->input('action'); // 'accept' atau 'reject'

        if (!in_array($action, ['accept', 'reject'])) {
            return redirect()->back()->withErrors('Aksi tidak valid.');
        }

        $status = $action === 'accept' ? 'approved' : 'rejected';

        $updated = DB::table('request')->where('id', $id)->update([
            'status' => $status,
            'updated_at' => now(),
        ]);

        if (!$updated) {
            return redirect()->back()->withErrors('Gagal memperbarui permintaan.');
        }

        return redirect()->route('admin.request')
            ->with('success', 'Permintaan berhasil ' . ($status === 'approved' ? 'disetujui' : 'ditolak') . '.');
    }

    // Menampilkan daftar perusahaan yang diterima
    public function showAcceptedRequests()
    {
        $requests = DB::table('request')->where('status', 'approved')->get();

        // Konversi created_at menjadi instance Carbon
        foreach ($requests as $request) {
            $request->created_at = Carbon::parse($request->created_at);
        }

        return view('admin.companyList', compact('requests'));
    }

    // Menampilkan detail perusahaan yang diterima
    public function showCompanyDetail($id)
    {
        // Mengambil detail perusahaan berdasarkan ID
        $request = DB::table('request')->find($id);

        if (!$request) {
            abort(404, 'Perusahaan tidak ditemukan');
        }

        // Mengirimkan data ke view detailCompany
        return view('admin.detail', compact('request'));
    }

    // disNetwork, menampilkan pt yg sudah apply
    public function showUserAppliedCompanies()
    {
        // Ambil data perusahaan dengan status 'approved'
        $requests = DB::table('request')
            ->where('status', 'approved')
            ->get();

        // Kirim data ke view
        return view('disNetwork', compact('requests'));
    }

    public function deleteCompany($id)
    {
        // Hapus perusahaan berdasarkan ID
        DB::table('request')->where('id', $id)->delete();
        // mengembalikan ke companyList
        return redirect()->route('admin.companyList')->with('success', 'Perusahaan berhasil dihapus.');
    }
}
