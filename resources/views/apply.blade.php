@extends('layout.main')

@section('content')
    <section id="about" class="about-background" style="background-image: url('{{ asset('assets/jpg/about.jpg') }}');">
        <div class="container text-center text-white">
            <h1>Judul atau Konten di Atas Background</h1>
            <p>Deskripsi atau informasi lainnya yang muncul di atas background.</p>
        </div>
    </section>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <!-- Company Info Section -->
                <div class="mb-4">
                    <h3 class="mb-3 text-center">Ayo Bergabung Bersama Kami</h3>
                    <form>
                        <div class="mb-3">
                            <label for="companyName" class="form-label">* Nama Perusahaan (Wajib Isi)</label>
                            <input type="text" class="form-control" id="companyName"
                                placeholder="Masukan Nama Perusahaan" required>
                        </div>
                        <div class="mb-3">
                            <label for="businessType" class="form-label">* Tipe Bisnis (Wajib Isi)</label>
                            <select class="form-select" id="businessType" required>
                                <option selected disabled>Pilih Tipe Bisnis</option>
                                <option value="1">Pertanian</option>
                                <option value="2">Agroteknologi</option>
                                <option value="3"></option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="companyWebsite" class="form-label">* Website Perusahaan (Wajib Isi)</label>
                            <input type="url" class="form-control" id="companyWebsite" placeholder="Masukan URL Website"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="workEmail" class="form-label">* Email Kerja (Wajib Isi)</label>
                            <input type="email" class="form-control" id="workEmail" placeholder="Masukan Email Kerja"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Pesan (Optional)</label>
                            <textarea class="form-control" id="message" rows="3" placeholder="Masukan Pesan"></textarea>
                        </div>
                    </form>
                </div>
              

                    <!-- Contact Info Section -->
                    {{-- <div class="mb-4">
                        <h3>Info Kontak</h3>
                        <form>
                            <div class="mb-3">
                                <label for="contactName" class="form-label">* Nama (Required)</label>
                                <input type="text" class="form-control" id="contactName" placeholder="Masukkan Nama"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="jobTitle" class="form-label">* Posisi / Jabatan (Required)</label>
                                <input type="text" class="form-control" id="jobTitle" placeholder="Masukan Jabatan"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="workEmail" class="form-label">* Email Kerja (Required)</label>
                                <input type="email" class="form-control" id="workEmail" placeholder="Masukan Email Kerja"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="personalEmail" class="form-label">Email Pribadi (Optional)</label>
                                <input type="email" class="form-control" id="personalEmail"
                                    placeholder="Masukan Email Pribadi">
                            </div>
                            <div class="mb-3">
                                <label for="phoneNumber" class="form-label">* No Telepon / No WhatsApp
                                    (Required)</label>
                                <input type="tel" class="form-control" id="phoneNumber" placeholder="Masukan No Hp"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Pesan  (Optional)</label>
                                <textarea class="form-control" id="message" rows="3" placeholder="Masukan Pesan"></textarea>
                            </div>
                        </form>
                    </div> --}}
            </div>
        </div>
    </div>
@endSection
