@extends('layout.main2')

@section('title', 'Dashboard')

@section('contents')
<div class="content-wrapper">
    <h1 class="mb-4 mt-3">List Berita</h1>
    <hr class="mx-auto my-3">
    <div class="d-flex justify-content-end mb-3">
        <a href="/admin/tambahBerita" class="btn btn-success">
            <i class="fa fa-plus pe-2"></i>Tambah Berita
        </a>
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
                                @if($news->isEmpty())
                                    <tr>
                                        <td colspan="5" class="text-center">Tidak ada berita yang tersedia.</td>
                                    </tr>
                                @else
                                    @foreach ($news as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->judul }}</td>
                                        <td>{{ $item->penulis }}</td>
                                        <td>{{ $item->created_at->format('d-m-Y') }}</td>
                                        <td>
                                            <!-- Tombol untuk Edit -->
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#ubahBeritaModal{{ $item->id }}">
                                                <i class="fa fa-edit"></i> Ubah
                                            </button>
                                            
                                            <!-- Tombol untuk Hapus -->
                                            <form action="{{ route('admin.news.destroy', $item->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i> Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>

                                    <!-- Modal untuk Edit Berita -->
                                    <div class="modal fade" id="ubahBeritaModal{{ $item->id }}" tabindex="-1"
                                        aria-labelledby="ubahBeritaModalLabel{{ $item->id }}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="ubahBeritaModalLabel{{ $item->id }}">Ubah Berita</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('admin.news.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="mb-3">
                                                            <label for="judulBerita" class="form-label">Judul Berita</label>
                                                            <input type="text" class="form-control" id="judulBerita"
                                                                name="judul" value="{{ $item->judul }}" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="penulis" class="form-label">Penulis</label>
                                                            <input type="text" class="form-control" id="penulis"
                                                                name="penulis" value="{{ $item->penulis }}" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="gambar" class="form-label">Gambar</label>
                                                            <input type="file" class="form-control" id="gambar"
                                                                name="gambar" accept="image/*">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="isi" class="form-label">Isi Berita</label>
                                                            <textarea class="form-control" id="editor" name="isi" rows="5"
                                                                required>{{ $item->isi }}</textarea>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Tutup</button>
                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
