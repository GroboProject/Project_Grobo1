@extends('layout.main')

@section('title', 'GROBO | Spesifikasi GROVE')

@section('content')
    <section id="grove" class="text-center" style="  padding: 110px 0;">
        <div class="container">
            <h1 style="font-size: 60px; font-weight: bold; font-family: 'Playfair Display', serif;">GROVE</h1>
            <h4 style="font-size: 30px; font-weight: bold; font-family: 'Poppins', sans-serif;">(Robot Pertanian Lahan
                Kering)</h4>
            <img src="{{ asset('assets/jpg/grove.PNG') }}" alt="Grove Robot" style="width: 70vh; margin: 1px 0;">
            <h3 style="font-size: 24px;  font-family: 'Roboto', sans-serif;">Solusi Alat Gerak Pada Pertanian Lahan Kering
            </h3>
            <hr style="width: 50%; margin: 20px auto; border: 1px solid white;">
        </div>
    </section>

    <section id="grove-desc" class="text-center py-5">
        <div class="container">
            <div class="row justify-content-center mb-4" style="padding: 100px;">
                <div class="col-11">
                    <h2 class="fw-bold" style="font-family: 'Poppins', sans-serif;">
                        Kendaraan Tak Berawak dengan Remote Kontrol, Satu Sistem untuk Banyak Pekerjaan
                    </h2>
                </div>
            </div>
            {{-- /* Tambahkan border di sini agar melengkung */ --}}
            <div id="features" class="row justify-content-center" style="margin-top: -50px;">
                <div class="col-md-3 col-sm-6 mb-4 mt-5">
                    <div class="feature-item">
                        <i class="bi bi-grid-3x3-gap icon-style"></i>
                        <h5 class="fw-bold fs-5 mt-4">Modular</h5>
                        <p class="text-muted">Muatan opsional untuk berbagai sistem</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 mt-5">
                    <div class="feature-item">
                        <i class="bi bi-controller"></i>
                        <h5 class="fw-bold fs-5 mt-4">Mudah Digunakan</h5>
                        <p class="text-muted">Kontrol Menggunakan Remote Kontrol</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 mt-5">
                    <div class="feature-item">
                        <i class="bi bi-gear"></i>
                        <h5 class="fw-bold fs-5 mt-4">Torsi Besar</h5>
                        <p class="text-muted">Kuat untuk berbagai medan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="grove-spec" class="text-center py-5">
        <div class="container">
            <div class="row justify-content-center mb-4" style="padding: 100px;">
                <div class="col-11 mb-5">
                    <h2 class="fw-bold" style="font-family: 'Poppins', sans-serif;">Spesifikasi GROVE</h2>
                </div>
                <div class="video-box mb-5 mt-4">
                    <video class="video-content" src="{{ asset('assets/jpg/grove_gif.gif') }}"
                        poster="{{ asset('assets/jpg/grove_gif.gif') }}" playsinline muted autoplay="false" loop="false"
                        style="width: 110%; max-width: 100vh; height: 100%;"></video>
                </div>
            </div>
            <div id="grove-spec" class="row g-4">
                <!-- Card 1 -->
                <div class="col-lg-6">
                    <div class="card bg-dark border-0 h-100">
                        <img src="{{ asset('assets/jpg/material.png') }}" alt="High-strength integration steel frame" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Kerangka yang terintegrasi dengan kekuatan tinggi</h5>
                            <p class="card-text">Dirancang untuk meningkatkan kekuatan dan daya tahan struktur tubuh kendaraan.</p>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-lg-6">
                    <div class="card bg-dark border-0 h-100">
                        <img src="{{ asset('assets/jpg/Ukuran.png') }}" alt="Customise for agricultural scenarios" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Didesain untuk kebutuhan pertanian</h5>
                            <p class="card-text">Memaksimalkan produktivitas di lahan kering dengan efisiensi penggunaan energi dan daya tahan tinggi.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="grove-spec" class="row g-4 mt-4 mb-4 justify-content-center">
                <!-- Card 3 -->
                <div class="col-lg-6">
                    <div class="card bg-dark border-0 h-100">
                        <img src="{{ asset('assets/jpg/rangka.png') }}" alt="Highly modular design" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Desain yang sangat modular</h5>
                            <p class="card-text"> mudah untuk diperbaiki, memastikan efisiensi dalam penggantian komponen dan penghematan waktu saat perawatan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="core-values" class="py-5">
        <div class="container">
            <hr class="mx-auto my-3">
            <div class="row text-center">
                <!-- Kolom 1 -->
                <div class="col-md-4 mb-4">
                    <div class="value-item">
                        <i class="bi bi-gear fs-2 text-success"></i>
                        <h5 class="fw-bold mt-2">Torsi</h5>
                        <p class="text-muted">Berkekuatan 30 Newton-meter</p>
                    </div>
                </div>
                <!-- Kolom 2 -->
                <div class="col-md-4 mb-4">
                    <div class="value-item">
                        <i class="bi bi-box-seam fs-2 text-success"></i>
                        <h5 class="fw-bold mt-2">Beban</h5>
                        <p class="text-muted">Dapat menampung beban hingga 100kg</p>
                    </div>
                </div>
                <!-- Kolom 3 -->
                <div class="col-md-4 mb-4">
                    <div class="value-item">
                        <i class="bi bi-battery-charging fs-2 text-success"></i>
                        <h5 class="fw-bold mt-2">Baterai</h5>
                        <p class="text-muted">Berkapasitas 50.000 mAh</p>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <!-- Kolom 4 -->
                <div class="col-md-4 offset-md-2 mb-4">
                    <div class="value-item">
                        <i class="bi bi-arrow-clockwise fs-2 text-success"></i>
                        <h5 class="fw-bold mt-2">Akselerasi</h5>
                        <p class="text-muted">Dapat berputar 360 derajat</p>
                    </div>
                </div>
                <!-- Kolom 5 -->
                <div class="col-md-4 mb-4">
                    <div class="value-item">
                        <i class="bi bi-lightning-charge fs-2 text-success"></i>
                        <h5 class="fw-bold mt-2">Kecepatan</h5>
                        <p class="text-muted">Kecepatan maksimal 10 km/jam</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
