<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    // Menampilkan semua berita
    public function index()
    {
        $news = News::latest()->get(); // Ambil semua berita, urut berdasarkan waktu terbaru
        return view('news', compact('news'));
    }

    // Menampilkan detail berita
    public function show($id)
    {
        $news = News::findOrFail($id); // Cari berita berdasarkan ID
        return view('isiBerita', compact('news'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'isi' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Simpan gambar ke storage
        $path = $request->file('gambar')->store('gambar', 'public');

        // Simpan data ke database
        News::create([
            'judul' => $validated['judul'],
            'penulis' => $validated['penulis'],
            'isi' => $validated['isi'],
            'gambar' => $path,
        ]);

        return redirect()->route('admin.news.index')->with('success', 'Berita berhasil ditambahkan!');
    }
    public function newsTable()
    {
        $news = News::all();
        return view('admin.newsTable', compact('news'));
    }
}
