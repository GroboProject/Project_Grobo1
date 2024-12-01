@extends('layout.main')

@section('title', 'GROBO | Kontak Kami')

@section('content')
    <section id="community">
        <div class="container my-5 py-5 text-center">
            <h2 class="text-capitalize m-0 py-lg-5" style="margin-bottom: 0;">Kontak Kami</h2>
            <hr class="mx-auto my-3" style="width: 50%; height: 2px; background-color: #ffffff; border: none;">
        </div>
    </section>

    <section id="contact">
        <div class="container my-5 py-5 text-center" style="background-color: #1A242F;">
            <div class="row">
                <!-- Alamat Section -->
                <div class="col-md-6 mb-4">
                    <div style="background-color: #242e38; border-radius: 20px; text-align: left; padding: 20px;">
                        <p style="margin-top: 0; font-weight: bold; font-size: 24px; color: #fff;">Alamat</p>
                        <p style="color: #ccc; margin-bottom: 10px;">
                            <i class="bi bi-building pe-2"></i>
                            <span>Jl. Lodaya II, RT.02/RW.06, Babakan, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat
                                16128</span>
                        </p>
                        <div class="ratio ratio-16x9" style="border: 3px solid #ccc; border-radius: 10px;">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.4649275340003!2d106.8036796753146!3d-6.588987393404666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5f2b25cf481%3A0x18a4eabbf4da5231!2sIPB%20Cilibende!5e0!3m2!1sen!2sid!4v1731911173982!5m2!1sen!2sid"
                                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>

                <!-- Hubungi Kami Section -->
                <div class="col-md-6 mb-4">
                    <div style="background-color: #242e38; border-radius: 20px; text-align: left; padding: 20px;">
                        <p style="margin-top: 0; font-weight: bold; font-size: 24px; color: #fff;">Hubungi Kami</p>
                        <p style="color: #ccc;">
                            <i class="bi bi-telephone-inbound pe-2"></i> <span>+62 812 3456 7890</span>
                        </p>
                        <p style="color: #ccc;">
                            <i class="bi bi-envelope pe-2"></i> <span>grobo@gmail.com</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feedback Section -->
    @if (session('success1'))
        <div class="alert1">
            {{ session('success1') }}
        </div>
    @endif
    <div class="container my-5 py-5 text-center" style="background-color: #1A242F;">
        <h3 class="text-capitalize text-white">Berikan Umpan Balik Anda</h3>
        <p class="text-light mb-1">Kami ingin mendengar pendapat dan masukan Anda!</p>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <form action="{{ route('feedback.store') }}" method="POST" class="feedback-form">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label text-white">Nama</label>
                        <input type="text" class="form-control" id="name" name="name"
                            placeholder="Masukkan nama Anda" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label text-white">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Masukkan email Anda" required>
                    </div>
                    <div class="mb-3">
                        <label for="feedback" class="form-label text-white">Pesan atau Masukan</label>
                        <textarea class="form-control" id="feedback" name="feedback" rows="5" placeholder="Tuliskan pesan Anda" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>

            <style>
                .feedback-form {
                    max-width: 600px;
                    /* Batasi lebar form */
                    margin: 50px auto;
                    /* Posisi form di tengah */
                    padding: 20px;
                    /* Tambahkan padding agar terlihat rapi */
                    background-color: #20232a;
                    /* Warna latar belakang */
                    border-radius: 10px;
                    /* Sudut melengkung */
                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                    /* Tambahkan bayangan */
                }

                .alert1 {
                    width: 100%;
                    /* Lebar penuh container */
                    text-align: center;
                    /* Pusatkan teks */
                    background-color: #d4edda;
                    /* Warna hijau terang (sesuai Bootstrap success) */
                    color: #155724;
                    /* Warna teks hijau gelap */
                    padding: 15px;
                    /* Ruang dalam */
                    border: 1px solid #c3e6cb;
                    /* Border hijau */
                    border-radius: 5px;
                    /* Sudut melengkung */
                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                    /* Efek bayangan */
                    margin-top: 40px;
                    /* Tambahkan jarak ke bawah */
                    margin-bottom: 20px;
                    /* Opsional: Tambahkan jarak ke elemen di bawahnya */
                }
            </style>

        @endSection
