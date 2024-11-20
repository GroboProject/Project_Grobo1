@extends('layout.main2')

@section('title', 'Dashboard')

@section('contents')
<div class="content-wrapper">
    <h1 class="mb-4 mt-3">Detail Perusahaan</h1>
    <hr class="mx-auto my-3">
    <div class="container mt-4">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th scope="row">Nama Perusahaan</th>
                    <td>PT Bala Bala</td>
                </tr>
                <tr>
                    <th scope="row">Bidang Perusahaan</th>
                    <td>Pertanian</td>
                </tr>
                <tr>
                    <th scope="row">Website Perusahaan</th>
                    <td><a href="https://saijda" target="_blank">https://saijda</a></td>
                </tr>
                <tr>
                    <th scope="row">Email Kerja</th>
                    <td><a href="mailto:bala@gmail.com">bala@gmail.com</a></td>
                </tr>
                <tr>
                    <th scope="row">Pesan</th>
                    <td>Semmemememememememem</td>
                </tr>
            </tbody>
        </table>

        <!-- Buttons -->
        <div class="d-flex justify-content-start pe-3">
            <!-- Terima Button -->
            <a href="/admin/companyList" class="btn btn-primary btn-sm">
                <i class="bi bi-check-circle"></i>Kembali
            </a>
    </div>
</div>
@endsection