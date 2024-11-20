@extends('layout.main2')

@section('title', 'Detail Perusahaan')

@section('contents')
<div class="content-wrapper">
    <h1 class="mb-4 mt-3">Detail Perusahaan</h1>
    <hr class="mx-auto my-3">
    <div class="container mt-4">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th scope="row">Nama Perusahaan</th>
                    <td>{{ $request->company_name }}</td>
                </tr>
                <tr>
                    <th scope="row">Bidang Perusahaan</th>
                    <td>{{ $request->business_type }}</td>
                </tr>
                <tr>
                    <th scope="row">Website Perusahaan</th>
                    <td><a href="{{ $request->company_website }}" target="_blank">{{ $request->company_website }}</a></td>
                </tr>
                <tr>
                    <th scope="row">Email Kerja</th>
                    <td><a href="mailto:{{ $request->work_email }}">{{ $request->work_email }}</a></td>
                </tr>
                <tr>
                    <th scope="row">Pesan</th>
                    <td>{{ $request->message }}</td>
                </tr>
            </tbody>
        </table>

        <!-- Button Kembali -->
        <div class="d-flex justify-content-start pe-3">
            <a href="{{ route('admin.companyList') }}" class="btn btn-primary btn-sm">
                <i class="bi bi-arrow-left-circle"></i> Kembali
            </a>
        </div>
    </div>
</div>
@endsection
