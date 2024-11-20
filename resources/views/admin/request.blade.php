@extends('layout.main2')

@section('title', 'Dashboard - Request')

@section('contents')
    <div class="content-wrapper">
        <h1 class="mb-4 mt-3">Daftar Permintaan</h1>
        <hr class="mx-auto my-3">

        <div class="row">
            @forelse ($request as $request)
                <div class="col-md-4 mb-3">
                    <div class="card border-dark h-100">
                        <div class="card-header bg-transparent border-dark">
                            <strong>Form:</strong> {{ $request->work_email }}
                        </div>
                        <div class="card-body text-dark">
                            <h5 class="card-title">{{ $request->company_name }}</h5>
                            <p class="card-text">
                                <strong>Bidang:</strong> {{ $request->business_type }}
                            </p>
                        </div>
                        <div class="card-footer bg-transparent border-dark text-center">
                            <a href="{{ route('admin.request.detail', $request->id) }}" class="btn btn-primary btn-sm">
                                Detail
                            </a>
                        </div>  
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="text-center text-muted">Tidak ada permintaan baru.</p>
                </div>
            @endforelse
        </div>
    </div>
@endsection
