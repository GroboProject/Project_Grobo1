@extends('layout.main')

@section('title', 'GROBO | Isi Berita')

@section('content')
    <section id="community">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <!-- Konten Berita -->
                    <article>
                        <header class="mb-4">
                            <h1 class="fw-bolder mb-1">{{ $news->judul }}</h1>
                            <div class="text-muted fst-italic mb-2">Ditulis oleh {{ $news->penulis }}</div>
                        </header>
                        <figure class="mb-4">
                            <img class="img-fluid rounded" src="{{ Storage::url($news->gambar) }}" alt="{{ $news->judul }}" />
                        </figure>
                        <section class="mb-5">
                            <p class="fs-5 mb-4">{{ nl2br(strip_tags($news->isi)) }}</p>
                        </section>
                    </article>

                    <!-- Tombol Kembali -->
                    <div class="d-flex justify-content-center mt-4">
                        <a href="{{ route('news.index') }}" class="custom-btn">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
