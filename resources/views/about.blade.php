@extends('layout.main')

@section('title', 'GROBO | Tentang Kami')

@section('content')
    <!-- billboard start  -->
    <section id="about" class="about-background" style="background-image: url('{{ asset('assets/jpg/about.jpg') }}');">
        <div class="container text-center text-white">
            <h1 style="font-style: 'Playfair Display', 'serif'; ">Mengoptimalkan Hasil Pertanian dengan Sistem Otomatisasi
            </h1>
            <p style="font-size: 20px; font-family: 'Poppins', sans-serif;">GROBO mengintegrasikan teknologi canggih untuk
                membantu petani meningkatkan efisiensi dan hasil pertanian dengan sistem yang mudah digunakan dan dapat
                diandalkan.</p>
        </div>
    </section>


    <!-- Feature start  -->
    <section id="tentang" style="background-color: #1A242F">
        <div class="container py-5 ">
            <div class="row">
                <div class="section-header align-center mb-5 text-center">
                    <h2 class=" text-capitalize m-0 mb-4">GROBO</h2>
                    <p>Grobo adalah sebuah situs web yang memberikan informasi terkait proyek alat pertanian yang kami
                        kembangkan. Situs ini dilengkapi dengan berbagai fitur, seperti penyampaian berita terkini mengenai
                        alat yang kami ciptakan, informasi spesifikasi alat, serta layanan untuk bermitra atau menjadi
                        distributor alat tersebut. Selain itu, Grobo juga berfungsi sebagai platform untuk mempromosikan
                        inovasi teknologi pertanian, menjembatani kolaborasi antara petani dan distributor, serta memberikan
                        dukungan bagi komunitas yang ingin berkontribusi dalam pengembangan teknologi pertanian yang
                        berkelanjutan. Kami berkomitmen untuk menjadi solusi terdepan dalam mendukung pertanian modern.</p>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Residence start  -->
    <!--About us start  -->
    <section class="gallery-section container-fluid py-5 px-0">
        <div>
            <h2 class="text-capitalize m-0 py-lg-5 " style="margin-bottom: 0; text-align: center;">Dokumentasi Pengerjaan
                Alat</h2>
            <hr class="mx-auto my-3" style="width: 50%; height: 2px; background-color: #ffffff; border: none;">
        </div>
        <div class="row g-0">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="row g-0">
                    <div class="col-12">
                        <a class="d-block" href="{{ asset('assets/jpg/body-about.jpg') }}" data-lightbox="gallery">
                            <img class="img-fluid" src="{{ asset('assets/jpg/body-about.jpg') }}" alt="Gambar 1">
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="d-block" href="{{ asset('assets/jpg/desain-about.jpg') }}" data-lightbox="gallery">
                            <img class="img-fluid" src="{{ asset('assets/jpg/desain-about.jpg') }}" alt="Gambar 2">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s"
                style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div class="row g-0">
                    <div class="col-12">
                        <a class="d-block" href="{{ asset('assets/jpg/bolongin-about.jpg') }}" data-lightbox="gallery">
                            <img class="img-fluid" src="{{ asset('assets/jpg/bolongin-about.jpg') }}" alt="Gambar 3">
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="d-block" href="{{ asset('assets/jpg/body2-about.jpg') }}" data-lightbox="gallery">
                            <img class="img-fluid" src="{{ asset('assets/jpg/body2-about.jpg') }}" alt="Gambar 4">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s"
                style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                <div class="row g-0">
                    <div class="col-12">
                        <a class="d-block" href="{{ asset('assets/jpg/las-about.jpg') }}" data-lightbox="gallery">
                            <img class="img-fluid" src="{{ asset('assets/jpg/las-about.jpg') }}" alt="Gambar 5">
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="d-block" href="{{ asset('assets/jpg/berita1.png') }}" data-lightbox="gallery">
                            <img class="img-fluid" src="{{ asset('assets/jpg/berita1.png') }}" alt="Gambar 6">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s"
                style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                <div class="row g-0">
                    <div class="col-12">
                        <a class="d-block" href="{{ asset('assets/jpg/elektro2-about.jpg') }}" data-lightbox="gallery">
                            <img class="img-fluid" src="{{ asset('assets/jpg/elektro2-about.jpg') }}" alt="Gambar 7">
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="d-block" href="{{ asset('assets/jpg/ilman-about.jpg') }}" data-lightbox="gallery">
                            <img class="img-fluid" src="{{ asset('assets/jpg/ilman-about.jpg') }}" alt="Gambar 8">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <!-- Testimonial start  -->
    <!-- Help start  -->
    <section id="help" class="py-5"
        style="background: linear-gradient(270deg, #1A242F 0.01%, rgba(26, 36, 47, 0.00) 100%);">
        <div class="container-xxl py-5">
            <div class="container py-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase">Our Team</h6>
                    <h1 class="mb-5">Expert Team Members</h1>
                </div>
                <div class="container">
                    <div class="row g-1">
                        <!-- Baris pertama dengan 3 kolom -->
                        <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item p-4">
                                <div class="overflow-hidden mb-4">
                                    <img class="img-fluid" src="{{ asset('assets/jpg/james.jpg') }}" alt="">
                                </div>
                                <h5 class="mb-0">James Brando Gaio</h5>
                                <p>J0404221050</p>
                                <div class="btn-slide mt-1">
                                    <i class="fa fa-share"></i>
                                    <span>
                                        <a href="https://www.facebook.com/muhammad.rezga.7" target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="https://x.com/lawakbangetasw" target="_blank">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="https://www.instagram.com/el_rezga" target="_blank">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item p-4">
                                <div class="overflow-hidden mb-4">
                                    <img class="img-fluid" src="{{ asset('assets/jpg/agus.jpg') }}" alt="">
                                </div>
                                <h5 class="mb-0">Luh Agustina Aryani</h5>
                                <p>J0404221057</p>
                                <div class="btn-slide mt-1">
                                    <i class="fa fa-share"></i>
                                    <span>
                                        <a href="https://www.facebook.com/muhammad.rezga.7" target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="https://x.com/muhammad_rezga" target="_blank">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="https://www.instagram.com/el_rezga" target="_blank">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item p-4">
                                <div class="overflow-hidden mb-4">
                                    <img class="img-fluid" src="{{ asset('assets/jpg/farhan.jpg') }}" alt="">
                                </div>
                                <h5 class="mb-0">Farhan Aryaputra Hendriawan </h5>
                                <p>J0404221131</p>
                                <div class="btn-slide mt-1">
                                    <i class="fa fa-share"></i>
                                    <span>
                                        <a href="https://www.facebook.com/muhammad.rezga.7" target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="https://x.com/muhammad_rezga" target="_blank">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="https://www.instagram.com/el_rezga" target="_blank">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-2">
                        <!-- Baris kedua dengan 2 kolom -->
                        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item p-4">
                                <div class="overflow-hidden mb-4">
                                    <img class="img-fluid" src="{{ asset('assets/jpg/ega.jpg') }}" alt="">
                                </div>
                                <h5 class="mb-0">Muhammad El Rezga Karmita</h5>
                                <p>J0404221122</p>
                                <div class="btn-slide mt-1">
                                    <i class="fa fa-share"></i>
                                    <span>
                                        <a href="https://www.facebook.com/muhammad.rezga.7" target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="https://x.com/muhammad_rezga" target="_blank">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="https://www.instagram.com/el_rezga" target="_blank">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item p-4">
                                <div class="overflow-hidden mb-4">
                                    <img class="img-fluid" src="{{ asset('assets/jpg/nopal.jpg') }}" alt="">
                                </div>
                                <h5 class="mb-0">Mohamad Nouval Amrullah </h5>
                                <p>J0404221133</p>
                                <div class="btn-slide mt-1">
                                    <i class="fa fa-share"></i>
                                    <span>
                                        <a href="https://www.facebook.com/muhammad.rezga.7" target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="https://x.com/muhammad_rezga" target="_blank">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="https://www.instagram.com/el_rezga" target="_blank">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Lets start  -->
    <section id="social-media" class="py-5" style="background-color: #121b25;">
        <div class="container text-center text-white">
            <!-- Heading -->
            <h2 class="mb-4 fw-bold">Follow Sosial Media Kami</h2>

            <!-- Icons Section -->
            <div class="d-flex justify-content-center align-items-center gap-4 py-4">
                <a href="https://www.instagram.com/grobo_agrikultur" class="text-white fs-3" target="_blank">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="#" class="text-white fs-3">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="#" class="text-white fs-3">
                    <i class="bi bi-twitter"></i>
                </a>
            </div>
        </div>
    @endSection
