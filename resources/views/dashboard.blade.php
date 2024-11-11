@extends('layout.main')

@section('content')
    <!-- billboard start  -->
    <section id="billboard">
        <div class="container ">
            <div class="row flex-lg-row-reverse align-items-center ">

                <div class="col-lg-6">
                    <img src="{{ asset('assets/jpg/grobo1.png') }}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes"
                        width="700" height="500" loading="lazy">
                </div>

                <div class="col-lg-6">
                    <h1 class=" text-capitalize  lh-1 my-3">Merevolusi Pertanian dengan Otomasi Cerdas</h1>
                    <p class="lead">Perkenalkan GROBO, robot penyiraman otomatis yang menghadirkan irigasi presisi ke
                        dunia pertanian modern. Dirancang untuk bekerja tanpa lelah dalam segala cuaca, GROBO mengoptimalkan
                        penggunaan air,
                        mengurangi kerja manual, dan meningkatkan hasil panen dengan mudah.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature start  -->
    <section id="feature">
        <div class="container py-5">
            <div class="row">
                <div class="section-header align-center mb-5">
                    <h2 class=" text-capitalize m-0">Featured In</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-between">
                <div class="col-md-2 ">
                    <div class="my-3" role="group" aria-label="3 / 7" style="width: 158.667px; margin-right: 20px;"><img
                            alt="image" src="{{ asset('tmplt/images/logo1.png') }}"></div>
                </div>
                <div class="col-md-2">
                    <div class="my-3" role="group" aria-label="3 / 7" style="width: 158.667px; margin-right: 20px;"><img
                            alt="image" src="{{ asset('tmplt/images/logo2.png') }}"></div>
                </div>
                <div class="col-md-2">
                    <div class="my-3" role="group" aria-label="3 / 7" style="width: 158.667px; margin-right: 20px;"><img
                            alt="image" src="{{ asset('tmplt/images/logo3.png') }}"></div>
                </div>
                <div class="col-md-2">
                    <div class="my-3" role="group" aria-label="3 / 7" style="width: 158.667px; margin-right: 20px;"><img
                            alt="image" src="{{ asset('tmplt/images/logo4.png') }}"></div>
                </div>
                <div class="col-md-2">
                    <div class="my-3" role="group" aria-label="3 / 7" style="width: 158.667px; margin-right: 20px;"><img
                            alt="image" src="{{ asset('tmplt/images/logo6.png') }}"></div>
                </div>


            </div>
        </div>
    </section>

    <!-- Residence start  -->
    <section id="residence">
        <div class="container my-5 py-5 text-center">
            <h2 class="text-capitalize m-0 py-lg-5">Spesifikasi dari Grobo</h2>

            <div class="video-box mb-5">
                <video class="video-content" src="{{ asset('assets/jpg/blast-2-unscreen.gif') }}"
                    poster="{{ asset('assets/jpg/blast-2-unscreen.gif') }}" playsinline muted autoplay="false"
                    loop="false" style="width: 100%; max-width: 800px; z-index: 0;"></video>
            </div>
    </section>


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
    <section id="testimonial">
        <div class="container my-5">

            <div class="swiper testimonial-swiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="row my-5 py-lg-5">
                            <div class="col-md-8 mx-auto">
                                <img src="{{ asset('tmplt/images/quote.png') }}" class="rounded mx-auto d-inline"
                                    alt="...">
                                <p class="testimonial-p mt-4">GROBO menghadirkan inovasi yang sangat membantu dalam sektor
                                    pertanian. Dengan otomatisasi yang canggih, sistem ini telah mempercepat proses kerja
                                    dan
                                    meningkatkan hasil produksi secara signifikan. Kami bangga menjadi bagian dari masa
                                    depan pertanian modern bersama GROBO.</p>

                                <div class="row">
                                    <div class="col-md-8">
                                        <p class="pt-5 mb-1">James</p>
                                        <p class="">Ceo, GROBO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="row my-5 py-lg-5">
                            <div class="col-md-8 mx-auto">
                                <img src="{{ asset('tmplt/images/quote.png') }}" class="rounded mx-auto d-inline"
                                    alt="...">
                                <p class="testimonial-p mt-4">
                                    "Bekerja di GROBO memberikan kesempatan bagi saya untuk menjadi bagian dari revolusi
                                    pertanian. Dengan teknologi otomatisasi yang kami kembangkan, kami berupaya membantu
                                    petani memanfaatkan sumber daya secara lebih efisien, sambil meningkatkan hasil panen
                                    dan kualitas hidup mereka."
                                </p>

                                <div class="row">
                                    <div class="col-md-8">
                                        <p class="pt-5 mb-1">Tim RPL</p>
                                        <p class="">Kelompok 8</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=" testimonial-swiper-button col-md-3 position-absolute">
                    <div class="swiper-button-prev testimonial-arrow"></div>
                    <div class="arrow-divider"> | </div>
                    <div class="swiper-button-next testimonial-arrow"></div>
                </div>

            </div>
        </div>
    </section>



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
    <section id="start">
        <div class="container my-5 py-5">
            <div class="row featurette py-lg-5 ">
                <div class="col-md-5 order-md-1 d-flex">
                    <h1 class="text-capitalize  lh-1 mb-3">Come collaborate with us</h1>
                </div>
                <div class="col-md-7 order-md-2">
                    <div class="text-content ps-md-5 mt-4 mt-md-0">
                        <p class="py-lg-2">Kami percaya bahwa kolaborasi adalah kunci untuk meraih hasil terbaik dan
                            menciptakan perubahan yang berarti. Dengan keahlian, ide, dan semangat Anda, kita bisa membuka
                            peluang baru, menghasilkan inovasi, dan mewujudkan proyek yang lebih besar. Bersama-sama, kita
                            tidak hanya bekerja, tetapi juga tumbuh dan belajar.</p>
                        <a href="/apply" class="btn btn-primary btn-lg px-4 me-md-2">Join With Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endSection
