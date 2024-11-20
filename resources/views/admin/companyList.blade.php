@extends('layout.main2')

@section('title', 'Dashboard')

@section('contents')
    <div class="content-wrapper">
        <h1 class="mb-4 mt-3">List Perusahaan yang Diterima</h1>
        <hr class="mx-auto my-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Perusahaan</th>
                                        <th>Bidang Perusahaan</th>
                                        <th>Tanggal Pengajuan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Loop melalui data request yang statusnya sudah approved -->
                                    @foreach ($requests as $index => $request)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $request->company_name }}</td>
                                            <td>{{ $request->business_type }}</td>
                                            <td>{{ $request->created_at->format('Y-m-d') }}</td>
                                            <td>
                                                <!-- Tombol Detail -->
                                                <a href="{{ route('admin.detail', $request->id) }}"
                                                    class="btn btn-info btn-sm">
                                                    <i class="fa fa-eye pe-2"></i>Detail
                                                </a>

                                                <!-- Tombol Hapus -->
                                                @if (session('success'))
                                                    <div class="alert alert-success alert-dismissible fade show"
                                                        role="alert">
                                                        {{ session('success') }}
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                            aria-label="Close"></button>
                                                    </div>
                                                @endif

                                                <form action="{{ route('admin.delete', $request->id) }}" method="POST"
                                                    style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus perusahaan ini?')">
                                                        <i class="fa fa-trash pe-2"></i>Hapus
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
