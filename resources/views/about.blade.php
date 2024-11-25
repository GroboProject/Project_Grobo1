@extends('layout.main')

@section('title', 'GROBO | Tentang Kami')

@section('content')
    <!-- billboard start  -->
    <section id="about" class="about-background" style="background-image: url('{{ asset('assets/jpg/about.jpg') }}');">
        <div class="container text-center text-white">
            <h1 style="font-style: 'Playfair Display', 'serif'; ">Mengoptimalkan Hasil Pertanian dengan Sistem Otomatisasi</h1>
            <p style="font-size: 20px; font-family: 'Poppins', sans-serif;">GROBO mengintegrasikan teknologi canggih untuk membantu petani meningkatkan efisiensi dan hasil pertanian dengan sistem yang mudah digunakan dan dapat diandalkan.</p>
        </div>
    </section>


    <!-- Feature start  -->
    <section id="tentang" style="background-color: #1A242F">
        <div class="container py-5 ">
            <div class="row">
                <div class="section-header align-center mb-5 text-center">
                    <h2 class=" text-capitalize m-0 mb-4">GROBO</h2>
                    <p>Grobo adalah sebuah situs web yang memberikan informasi terkait proyek alat pertanian yang kami kembangkan. Situs ini dilengkapi dengan berbagai fitur, seperti penyampaian berita terkini mengenai alat yang kami ciptakan, informasi spesifikasi alat, serta layanan untuk bermitra atau menjadi distributor alat tersebut. Selain itu, Grobo juga berfungsi sebagai platform untuk mempromosikan inovasi teknologi pertanian, menjembatani kolaborasi antara petani dan distributor, serta memberikan dukungan bagi komunitas yang ingin berkontribusi dalam pengembangan teknologi pertanian yang berkelanjutan. Kami berkomitmen untuk menjadi solusi terdepan dalam mendukung pertanian modern.</p>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Residence start  -->
    <!--About us start  -->
    <section id="about-us">
        <div class="container">
            <div class="row py-lg-5">

                <h2 class="text-capitalize text-center m-0 py-lg-5">Why to choose us</h2>

                <div class="text-center col-lg-4">
                    <img src="{{ asset('tmplt/images/search.png') }}" class="bd-placeholder-img rounded-circle"
                        alt="Bootstrap Themes" width="140" height="140" loading="lazy">
                    <h4 class="fw-normal mt-5 ">Mudah Untuk Dipantau</h4>
                    <p>Dengan GROBO, Anda dapat memantau kondisi tanaman Anda dari mana saja. Sistem kami memberikan data
                        real-time tentang kelembapan tanah,
                        suhu, dan kondisi lainnya, memudahkan Anda mengelola kebun tanpa harus selalu berada di lokasi.</p>
                </div>

                <div class="text-center col-lg-4">
                    <img src="{{ asset('tmplt/images/price.png') }}" class="bd-placeholder-img rounded-circle"
                        alt="Bootstrap Themes" width="140" height="140" loading="lazy">
                    <h4 class="fw-normal mt-5">Efisien dan Hemat Biaya</h4>
                    <p>GROBO membantu menghemat biaya operasional dengan sistem penyiraman otomatis yang tepat waktu dan
                        hemat air. Dengan teknologi ini,
                        kami membantu petani meningkatkan efisiensi dan mengurangi penggunaan sumber daya yang berlebihan.
                    </p>
                </div>

                <div class="text-center col-lg-4">
                    <img src="{{ asset('tmplt/images/time.png') }}" class="bd-placeholder-img rounded-circle"
                        alt="Bootstrap Themes" width="140" height="140" loading="lazy">
                    <h4 class="fw-normal mt-5 ">Proses Otomatis Cepat dan Akurat</h4>
                    <p>Dengan proses otomatisasi yang presisi, GROBO memastikan setiap tanaman mendapatkan perawatan yang
                        sesuai. Proses penyiraman dan
                        pemupukan dilakukan dengan cepat dan tepat, sehingga hasil panen lebih maksimal tanpa perlu
                        intervensi manual. </p>
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
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item p-4">
                            <div class="overflow-hidden mb-4">
                                <img class="img-fluid" src="{{ asset('tmplt2/img/team-1.jpg') }}" alt="">
                            </div>
                            <h5 class="mb-0">Full Name</h5>
                            <p>Designation</p>
                            <div class="btn-slide mt-1">
                                <i class="fa fa-share"></i>
                                <span>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item p-4">
                            <div class="overflow-hidden mb-4">
                                <img class="img-fluid" src="img/team-2.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Full Name</h5>
                            <p>Designation</p>
                            <div class="btn-slide mt-1">
                                <i class="fa fa-share"></i>
                                <span>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item p-4">
                            <div class="overflow-hidden mb-4">
                                <img class="img-fluid" src="img/team-3.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Full Name</h5>
                            <p>Designation</p>
                            <div class="btn-slide mt-1">
                                <i class="fa fa-share"></i>
                                <span>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
                        <div class="team-item p-4">
                            <div class="overflow-hidden mb-4">
                                <img class="img-fluid" src="img/team-4.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Full Name</h5>
                            <p>Designation</p>
                            <div class="btn-slide mt-1">
                                <i class="fa fa-share"></i>
                                <span>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </span>
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
            <h2 class="mb-4 fw-bold">Our Social Media</h2>

            <!-- Icons Section -->
            <div class="d-flex justify-content-center align-items-center gap-4 py-4">
                <a href="#" class="text-white fs-3">
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
