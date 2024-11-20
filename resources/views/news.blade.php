@extends('layout.main')

@section('content')
    <div class="container">
        <h1>Berita Terbaru</h1>
        <!-- Kondisi jika tidak ada berita -->
        @if ($news->isEmpty())
            <p class="text-center">Tidak ada berita untuk ditampilkan.</p>
        @else
            <div class="row">
                @foreach ($news as $item)
                    <div class="col-md-4">
                        <div class="card">
                            <img src="{{ Storage::url('gambar/' . $item->gambar) }}" class="card-img-top" alt="{{ $item->judul }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->judul }}</h5>
                                <p class="card-text">{!! Str::limit($item->isi, 100) !!}</p>
                                <a href="{{ route('news.show', $item->id) }}" class="btn btn-primary">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endSection 
