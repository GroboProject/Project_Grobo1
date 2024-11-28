@extends('layout.main2')

@section('title', 'Feedback')

@section('contents')
    <div class="content-wrapper">
        <h1 class="mb-4 mt-3">Feedback</h1>
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
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($feedbacks as $feedback)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $feedback->name }}</td>
                                            <td>{{ $feedback->email }}</td>
                                            <td>
                                                <!-- Tombol Detail -->
                                                <a href="{{ route('admin.feedback.detail', $feedback->id) }}"
                                                    class="btn btn-primary btn-sm">
                                                    <i class="fa fa-eye"></i> Detail
                                                </a>
                                                <!-- Form Hapus -->
                                                <form action="{{ route('admin.feedback.destroy', $feedback->id) }}"
                                                    method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus feedback ini?')">
                                                        <i class="fa fa-trash"></i> Hapus
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center">Belum ada feedback yang masuk.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endSection
