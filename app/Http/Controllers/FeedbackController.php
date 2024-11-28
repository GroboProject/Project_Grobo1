<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    // Tampilkan form feedback untuk user
    public function index()
    {
        return view('contact');
    }

    // Simpan feedback ke database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'feedback' => 'required|string',
        ]);

        Feedback::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->feedback,
        ]);

        return redirect()->back()->with('success1', 'Feedback berhasil dikirim.');
    }

    // Tampilkan semua feedback di halaman admin
    public function adminIndex()
    {
        $feedbacks = Feedback::all();
        return view('admin.feedback', compact('feedbacks'));
    }

    // Detail feedback
    public function detail($id)
    {
        $feedback = Feedback::findOrFail($id);
        return view('admin.detailFeedback', compact('feedback'));
    }

    // Hapus feedback
    public function destroy($id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->delete();

        return redirect()->route('admin.feedback')->with('success', 'Feedback berhasil dihapus.');
    }
}
