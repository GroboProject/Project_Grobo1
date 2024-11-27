@extends('layout.main')
@section('title', 'GROBO | Komunitas')

@section('content')
    <section id="community">
        <section id="community-hero">
            <div class="container ">
                <div class="row flex-lg-row-reverse align-items-center ">

                    <div class="col-lg-6">
                        <img src="{{ asset('assets/jpg/wa.png') }}" class="d-block mx-lg-auto img-fluid" alt="grove-wa"
                            width="1000" height="1000" loading="lazy">
                    </div>

                    <div class="col-lg-6">

                        <h1 class=" text-capitalize  lh-1 my-3">Bertani Jadi Lebih Mudah, Panen Lebih Optimal!</h1>
                        <p class="lead">Gabung sekarang dan jadilah bagian dari komunitas kami untuk bertani lebih cerdas,
                            efisien, dan menghasilkan lebih banyak!</p>
                        {{-- buat button di sini dengan desain agak melingkar --}}
                        <a href="" class="btn btn-primary btn-lg px-4 mb-3 mt-2" style="border-radius: 30px">Gabung
                            Sekarang</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="benefits-section">
            <div class="benefits-header">
                <h2>Bersama 100+ Petani Indonesia, dapatkan...</h2>
            </div>
            <div class="benefits-cards">
                <div class= "benefit-card">
                    <h3>Informasi dan Diskusi</h3>
                    <p>
                        Mulai dari update informasi tentang teknologi terbaru, tips dan trik, dan diskusi tentang
                        pertanian.
                    </p>
                </div>
                <div class="benefit-card">
                    <h3 style="color: blue">Koneksi</h3>
                    <p>
                        Dengan ratusan petani dari berbagai wilayah di Indonesia, Anda bisa mendapatkan relasi, partner
                        hingga vendor bisnis.
                    </p>
                </div>
                <div class="benefit-card">
                    <h3>GRATIS Konsultasi</h3>
                    <p>
                        Punya masalah alat yang sulit dipecahkan? Konsultasikan dengan tim ahli peternakan dari GROBO.
                    </p>
                </div>
            </div>
        </section>
    </section>
@endsection
