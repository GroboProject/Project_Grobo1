@extends('layout.main')

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
@endSection
