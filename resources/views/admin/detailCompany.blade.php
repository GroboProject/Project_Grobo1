@extends('layout.main2')

@section('title', 'Dashboard')

@section('contents')
<div class="content-wrapper">
    <h1 class="mb-4 mt-3">Detail Perusahaan</h1>
    <hr class="mx-auto my-3">
    <div class="container mt-4">
        <h3 class="mb-4">Detail Perusahaan</h3>
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
                    <td>
                        <a href="{{ $request->company_website }}" target="_blank">
                            {{ $request->company_website }}
                        </a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Email Kerja</th>
                    <td>
                        <a href="mailto:{{ $request->work_email }}">
                            {{ $request->work_email }}
                        </a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Pesan</th>
                    <td>{{ $request->message ?? 'Tidak ada pesan.' }}</td>
                </tr>
            </tbody>
        </table>

        <!-- Buttons -->
        <div class="d-flex justify-content-end pe-3">
            <!-- Terima Button -->
            <form action="{{ route('admin.request.verify', $request->id) }}" method="POST" class="d-inline">
                @csrf
                <button name="action" value="accept" class="btn btn-success btn-sm">
                    <i class="bi bi-check-circle"></i> Terima
                </button>
            </form>
        
            <!-- Tolak Button -->
            <form action="{{ route('admin.request.verify', $request->id) }}" method="POST" class="d-inline ms-2">
                @csrf
                <button name="action" value="reject" class="btn btn-danger btn-sm">
                    <i class="bi bi-x-circle"></i> Tolak
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
    