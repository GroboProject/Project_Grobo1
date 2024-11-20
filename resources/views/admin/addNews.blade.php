@extends('layout.main2')

@section('title', 'Tambah Berita')

@section('contents')
    <div class="content-wrapper">
        <h1 class="mb-4 mt-3">Tambah Berita</h1>
        <div class="container-fluid">
            <form action="{{ route('admin.storeNews') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <!-- Input Judul -->
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul Berita</label>
                    <input type="text" class="form-control" id="judul" name="judul"
                        placeholder="Masukkan judul berita" required>
                </div>

                <!-- Input Penulis -->
                <div class="mb-3">
                    <label for="penulis" class="form-label">Penulis</label>
                    <input type="text" class="form-control" id="penulis" name="penulis"
                        placeholder="Masukkan penulis berita" required>
                </div>

                <!-- Input File Gambar -->
                <div class="mb-3">
                    <label for="gambar">Pilih Gambar</label>
                    <input type="file" id="gambar" name="gambar" multiple
                        onchange="tampilkanPreview(this, 'preview')">
                    <br><br>
                    <div id="preview"></div> <!-- Tempat untuk menampilkan gambar preview -->
                </div>

                <!-- Textarea Isi Berita -->
                <div class="mb-3">
                    <label for="isi" class="form-label">Isi Berita</label>
                    <textarea class="form-control" id="editor" name="isi" rows="5" placeholder="Masukkan isi berita"></textarea>
                </div>

                <!-- Tombol Simpan dan Batal -->
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('admin.newsTable') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
@endsection
