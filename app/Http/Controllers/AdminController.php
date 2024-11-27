<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\News;
use App\Models\Request as RequestModel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(Request $request) {
        // Hitung total data
        $totalNews = News::count(); // Hitung semua data di tabel news
        $totalRequest = RequestModel::where('status', 'pending')->count(); // Hitung semua data di tabel request
        $totalApprovedCompanies = RequestModel::where('status', 'approved')->count(); // Hitung request dengan status 'approved'
        $totalFeedbacks = Feedback::count(); // Hitung semua data di tabel feedback
    
        // Kirimkan data ke view
        return view('admin.base', [
            'totalNews' => $totalNews,
            'totalRequests' => $totalRequest,
            'totalApprovedCompanies' => $totalApprovedCompanies,
            'totalFeedbacks' => $totalFeedbacks, // Tambahkan total feedback
        ]);
    }
    

    // Menampilkan daftar berita
    public function newsTable()
    {
        $news = News::all();
        return view('admin.newsTable', compact('news'));
    }

    // Menampilkan form untuk menambah berita
    public function addNews()
    {
        return view('admin.addNews');
    }

    public function storeNews(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'isi' => 'required',
        ]);

        $news = new News();
        $news->judul = $validated['judul'];
        $news->penulis = $validated['penulis'];
        $news->isi = $validated['isi'];

        // Simpan gambar jika ada
        if ($request->hasFile('gambar')) {
            $news->gambar = $request->file('gambar')->store('public/gambar');
        }

        $news->save();

        return redirect()->route('admin.newsTable')->with('success', 'Berita berhasil ditambahkan.');
    }

    public function updateNews(Request $request, $id)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'isi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $news = News::findOrFail($id);
        $news->judul = $validated['judul'];
        $news->penulis = $validated['penulis'];
        $news->isi = $validated['isi'];

        if ($request->hasFile('gambar')) {
            $news->gambar = $request->file('gambar')->store('public/gambar');
        }

        $news->save();

        return redirect()->route('admin.newsTable')->with('success', 'Berita berhasil diperbarui.');
    }

    public function destroyNews($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        return redirect()->route('admin.newsTable')->with('success', 'Berita berhasil dihapus.');
    }
}
