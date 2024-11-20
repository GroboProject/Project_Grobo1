@extends('layout.main2')

@section('title', 'Dashboard')

@section('contents')
    <div class="content-wrapper">
        <h1 class="mb-4 mt-3">List Berita</h1>
        <hr class="mx-auto my-3">
        <div class="d-flex justify-content-end mb-3">
            <a href="/admin/tambahBerita" type="button" class="btn btn-success"><i class="fa fa-plus pe-2"></i>Tambah
                Berita</a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Penulis</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>Uji Coba Grove</td>
                                        <td>James Brando</td>
                                        <td>12-11-2024</td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#ubahBeritaModal"><i class="fa fa-edit"></i>
                                                Ubah Berita
                                            </button>
                                            <button type="button" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i> Hapus
                                            </button>
                                        </td>

                                    </tr>
                                </tbody>
                                {{-- <tbody>
                                @foreach ($news as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->author }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        <a href="/admin/news/{{ $item->id }}" class="btn btn-primary">Detail</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody> --}}
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal untuk mengubah berita -->
        <div class="modal fade" id="ubahBeritaModal" tabindex="-1" aria-labelledby="ubahBeritaModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ubahBeritaModalLabel">Ubah Berita</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Form untuk mengubah berita -->
                        <form>
                            <!-- Input Judul Berita -->
                            <div class="mb-3">
                                <label for="judulBerita" class="form-label">Judul Berita</label>
                                <input type="text" class="form-control" id="judulBerita"
                                    placeholder="Masukkan judul berita" required>
                            </div>

                            <!-- Input Penulis -->
                            <div class="mb-3">
                                <label for="penulis" class="form-label">Penulis</label>
                                <input type="text" class="form-control" id="penulis"
                                    placeholder="Masukkan nama penulis" required>
                            </div>

                            <!-- Input Gambar -->
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Gambar</label>
                                <input type="file" class="form-control" id="gambar" accept="image/*">
                            </div>

                            <!-- Textarea Isi Berita -->
                            <div class="mb-3">
                                <label for="isi" class="form-label">Isi Berita</label>
                                <textarea class="form-control" id="editor" name="isi" rows="5" placeholder="Masukkan isi berita" required></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary" onclick="submitForm()">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
