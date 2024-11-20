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
                    <p class="lead">Perkenalkan salah satu inovasi terbaru dari kami, yaitu GROVE, alat gerak pada lahan pertanian kering
                        dunia pertanian modern. Dirancang untuk buntuk mempermudah pekerjaan di lahan pertanian kering. Dengan desain modern dan teknologi canggih, GROVE mampu menampung beban hingga 100 kg dan berputar 360 derajat untuk manuver maksimal. Dikendalikan dengan remote kontrol, alat ini dirancang untuk menghemat tenaga dan waktu Anda, menjadikan aktivitas bertani lebih efisien dan praktis. Jadikan GROVE solusi andalan Anda di bidang pertanian!</p>
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
            <div class="row d-flex justify-content-center align-items-center gap-5">
                <div class="col-md-2 d-flex justify-content-center">
                    <div class="my-3 mt-5 gap-5" role="group" aria-label="3 / 7" style="width: 158.667px;">
                        <img alt="image" src="{{ asset('assets/jpg/sv.png') }}"
                            style="width: 200%; margin-top: 13px; margin-left: -120px;">
                    </div>
                </div>
                <div class="col-md-2 d-flex justify-content-center">
                    <div class="my-3 mb-1" role="group" aria-label="3 / 7" style="width: 158.667px;">
                        <img alt="image" src="{{ asset('assets/jpg/ipb.png') }}" style="width: 100%; margin-left: 20px;">
                    </div>
                </div>
                <div class="col-md-2 d-flex justify-content-center">
                    <div class="my-3" role="group" aria-label="3 / 7" style="width: 158.667px;">
                        <img alt="image" src="{{ asset('assets/jpg/tekom.png') }}" style="width: 105%;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Residence start  -->
    <section id="residence">
        <div class="container my-5 py-5 text-center">
            <h2 class="text-capitalize m-0 py-lg-5">Spesifikasi dari GROVE</h2>

            <div class="video-box mb-5">
                <a href="/specification"><video class="video-content" src="{{ asset('assets/jpg/blast-2-unscreen.gif') }}"
                    poster="{{ asset('assets/jpg/blast-2-unscreen.gif') }}" playsinline muted autoplay="false"
                    loop="false" style="width: 100%; max-width: 800px; z-index: 0;"></video></a>
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
                    <h4 class="fw-normal mt-5 ">Presisi dan Akurat</h4>
                    <p>Teknologi canggih GROVE memastikan setiap pekerjaan dilakukan dengan presisi dan akurasi tinggi, membantu Anda mengelola lahan secara efisien. Setiap fitur dirancang untuk memberikan hasil terbaik, menjadikan alat ini solusi sempurna bagi petani modern.</p>
                </div>

                <div class="text-center col-lg-4">
                    <img src="{{ asset('tmplt/images/price.png') }}" class="bd-placeholder-img rounded-circle"
                        alt="Bootstrap Themes" width="140" height="140" loading="lazy">
                    <h4 class="fw-normal mt-5">Hemat Biaya</h4>
                    <p>GROVE menawarkan solusi inovatif dengan harga yang kompetitif, memberikan nilai maksimal untuk setiap investasi Anda. Dengan kualitas terbaik dan fitur unggulan, GROVE tidak hanya menghemat tenaga, tetapi juga memberikan keuntungan lebih besar dalam jangka panjang.
                    </p>
                </div>

                <div class="text-center col-lg-4">
                    <img src="{{ asset('tmplt/images/time.png') }}" class="bd-placeholder-img rounded-circle"
                        alt="Bootstrap Themes" width="140" height="140" loading="lazy">
                    <h4 class="fw-normal mt-5 ">Efisien dan Hemat Waktu</h4>
                    <p>Didesain untuk menghemat waktu, GROVE bekerja cepat dan efisien, meningkatkan produktivitas Anda di lahan pertanian. Dengan kemampuan manuver 360 derajat dan kendali jarak jauh, pekerjaan menjadi lebih mudah, cepat, dan nyaman. </p>
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
    <!-- Lets start  -->
    <section id="starts">
        <div class="container my-5 py-5">
            <div class="row featurette py-lg-5">
                <!-- Kolom teks kiri -->
                <div class="col-12 col-md-5 d-flex flex-column justify-content-center mb-4 mb-md-0">
                    <h1 class="text-capitalize lh-1 mb-3">Come collaborate with us</h1>
                </div>
                
                <!-- Kolom teks kanan -->
                <div class="col-12 col-md-7">
                    <div class="text-content ps-md-5 mt-4 mt-md-0">
                        <p class="py-lg-2">Kami percaya bahwa kolaborasi adalah kunci untuk meraih hasil terbaik dan menciptakan perubahan yang berarti. Dengan keahlian, ide, dan semangat Anda, kita bisa membuka peluang baru, menghasilkan inovasi, dan mewujudkan proyek yang lebih besar. Bersama-sama, kita tidak hanya bekerja, tetapi juga tumbuh dan belajar.</p>
                        <a href="/apply" class="btn btn-primary btn-lg px-4 me-md-2">Join With Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    @if (Session::has('success'))
        <script>
            Swal.fire({
                title: 'Logout Successful!',
                text: '{{ Session::get('success') }}',
                icon: 'success'
            });
        </script>
    @endif
@endSection
