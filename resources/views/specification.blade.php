@extends('layout.main')

@section('content')
    <section id="specification" class="spec-background" style="background-image: url('{{ asset('assets/jpg/grove.PNG') }}');">
        <div class="container text-center text-white d-flex flex-column justify-content-center align-items-center"
            style="min-height: 100vh;">
            <h1 class="fw-bold mb-3">GROVE (Ground Remote Operations Vehicle for Efficiency)</h1>
            <p class="lead">Robot pertanian lahan kering yang memudahkan pekerjaan dengan efisiensi tinggi.</p>
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-10">
                    <p class="mb-4">
                        GROVE adalah platform robot pertanian yang dirancang untuk mempermudah pekerjaan di lahan kering.
                        Dengan berbagai fitur canggih seperti sistem penghindaran rintangan, penyiraman otomatis, dan
                        pengumpulan data lingkungan, alat ini menjadi solusi masa depan untuk efisiensi pertanian.
                    </p>
                    <ul class="list-unstyled text-start mx-auto" style="max-width: 800px;">
                        <li class="mb-2"><strong>Dimensi:</strong> 120 cm x 80 cm x 60 cm (P x L x T).</li>
                        <li class="mb-2"><strong>Sumber Daya:</strong> Baterai Lithium-Ion 24V, tahan hingga 8 jam
                            operasi.</li>
                        <li class="mb-2"><strong>Sensor:</strong> Ultrasonik untuk deteksi rintangan, sensor kelembapan
                            untuk tanah.</li>
                        <li class="mb-2"><strong>Kapasitas:</strong> Mampu membawa beban hingga 50 kg.</li>
                        <li class="mb-2"><strong>Sistem Kendali:</strong> Remote control dan mode otomatis dengan GPS.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>



    {{-- <!-- Div Kedua -->
    <div class="bg-dark text-white py-5" style="background-color: #1A242F;">
        <div class="container text-center">
            <h3 class="mb-3">Robot Pertanian Lahan Kering</h3>
            <p>Memudahkan pekerjaan pertanian pada lahan kering dengan efisiensi tinggi.</p>
        </div>
    </div>

    <!-- Div Ketiga -->
    <div class="container my-5" style="background-image: {{ asset('assets/jpg/grove.PNG') }}">
        <h3 class="text-center mb-4">Spesifikasi Alat Kami</h3>
        <ul class="list-unstyled">
            <li class="mb-2"><strong>Dimensi:</strong> 120 cm x 80 cm x 60 cm (P x L x T).</li>
            <li class="mb-2"><strong>Sumber Daya:</strong> Baterai Lithium-Ion 24V, tahan hingga 8 jam operasi.</li>
            <li class="mb-2"><strong>Sensor:</strong> Ultrasonik untuk deteksi rintangan, sensor kelembapan untuk tanah.
            </li>
            <li class="mb-2"><strong>Kapasitas:</strong> Mampu membawa beban hingga 50 kg.</li>
            <li class="mb-2"><strong>Sistem Kendali:</strong> Remote control dan mode otomatis dengan GPS.</li>
            <li class="mb-2"><strong>Fitur Utama:</strong>
                <ul>
                    <li>Penyiraman otomatis berdasarkan kelembapan tanah.</li>
                    <li>Penghindaran rintangan cerdas.</li>
                    <li>Pengumpulan data lingkungan (kelembapan dan suhu).</li>
                </ul>
            </li>
        </ul>
    </div>
@endsection --}}
