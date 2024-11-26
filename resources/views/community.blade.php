@extends('layout.main')
@section('title', 'GROBO | Komunitas')

@section('content')
<section id="community">
    <div class="container my-5 py-5">
        <div class="text-center">
            <h2 class="text-capitalize m-0 py-lg-5">Isi Berita</h2>
        </div>

        <!-- Bagian Komentar -->
        <div class="comments-section">
            <h4 class="mb-4">Komentar</h4>

            <!-- Komentar Utama -->
            <div class="comment mb-4 p-3 border rounded bg-light">
                <div class="comment-header d-flex align-items-center">
                    <div class="user-icon me-3">
                        <img src="https://via.placeholder.com/40" alt="User Avatar" class="rounded-circle">
                    </div>
                    <strong class="text-black fw-bold">Ruslan Anwar</strong>
                    <span class="ms-2 text-muted small">5 years ago</span>
                </div>
                <p class="mt-2">Lanjutannya yang mana bang? saya bingung cari lanjutannya.</p>
                
                <!-- Form Balas Komentar -->
                <form action="#" method="POST" class="mt-2">
                    @csrf
                    <div class="mb-2">
                        <textarea class="form-control" rows="2" placeholder="Tulis balasan Anda..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary">Kirim Balasan</button>
                </form>
            </div>

            <!-- Balasan -->
            <div class="comment reply ms-4 mb-4 p-3 border rounded bg-light">
                <div class="comment-header d-flex align-items-center">
                    <div class="user-icon me-3">
                        <img src="https://via.placeholder.com/40" alt="Author Avatar" class="rounded-circle">
                    </div>
                    <strong class="text-black fw-bold">MB Herlambang</strong>
                    <span class="ms-2 text-muted small">5 years ago</span>
                </div>
                <p class="mt-2">Di bagian bawah, ada pilihan angka, Pages 1 2 3 4, diklik angkanya untuk lanjut ke halaman yang diinginkan.</p>
                
                <!-- Form Balas Balasan -->
                <form action="#" method="POST" class="mt-2">
                    @csrf
                    <div class="mb-2">
                        <textarea class="form-control" rows="2" placeholder="Tulis balasan Anda..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary">Kirim Balasan</button>
                </form>
            </div>

            <!-- Komentar dengan Error -->
            <div class="comment mb-4 p-3 border rounded bg-light">
                <div class="comment-header d-flex align-items-center">
                    <div class="user-icon me-3">
                        <img src="https://via.placeholder.com/40" alt="User Avatar" class="rounded-circle">
                    </div>
                    <strong class="text-black fw-bold">doel</strong>
                    <span class="ms-2 text-muted small">4 years ago</span>
                </div>
                <p class="mt-2">
                    File " ", line 60<br>
                    <code>y_pred = (y_pred &amp;&amp;gt; 0.5)</code><br>
                    SyntaxError: invalid syntax..<br>
                    Bagaimana solusinya gan?
                </p>
                
                <!-- Form Balas Komentar -->
                <form action="#" method="POST" class="mt-2">
                    @csrf
                    <div class="mb-2">
                        <textarea class="form-control" rows="2" placeholder="Tulis balasan Anda..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary">Kirim Balasan</button>
                </form>
            </div>

            <!-- Balasan -->
            <div class="comment reply ms-4 mb-4 p-3 border rounded bg-light">
                <div class="comment-header d-flex align-items-center">
                    <div class="user-icon me-3">
                        <img src="https://via.placeholder.com/40" alt="Author Avatar" class="rounded-circle">
                    </div>
                    <strong class="text-black fw-bold">MB Herlambang</strong>
                    <span class="ms-2 text-muted small">4 years ago</span>
                </div>
                <p class="mt-2">
                    Line 60 harusnya -> <code>y_pred = (y_pred > 0.5)</code><br>
                    Silakan dirubah, harusnya sudah bisa jalan.
                </p>
                
                <!-- Form Balas Balasan -->
                <form action="#" method="POST" class="mt-2">
                    @csrf
                    <div class="mb-2">
                        <textarea class="form-control" rows="2" placeholder="Tulis balasan Anda..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary">Kirim Balasan</button>
                </form>
            </div>
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            <nav>
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                </ul>
            </nav>
        </div>
    </div>
</section>
@endsection
