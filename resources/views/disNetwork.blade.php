@extends('layout.main')

@section('content')
    <section id="globe" class="about-background py-1">
        <div class="container text-center text-white">
            <img src="{{ asset('assets/jpg/globe.gif') }}" alt="Animation GIF" class="img-fluid">
        </div>
    </section>

    <section id="list" style="background-color: #1A242F">
        <div class="container my-5 py-5 text-center mb-3">
            <h2 class="mb-4">Daftar Perusahaan yang Sudah Di-Apply</h2>
            <hr class="mx-auto my-3" style="width: 50%; height: 2px; background-color: #ffffff; border: none;">
            <br>
            <div class="row justify-content-center">
                @if ($requests->isEmpty())
                    <p class="text-white">Belum ada perusahaan yang di-apply atau disetujui oleh admin.</p>
                @else
                    @foreach ($requests as $index => $request)
                        <div class="col-md-8 mb-4">
                            <div class="card">
                                <div class="card-header bg-transparent border-success">#{{ $index + 1 }}</div>
                                <div class="card-body text-success">
                                    <h5 class="card-title">{{ $request->company_name }}</h5>
                                    <p class="card-text">
                                        <strong>Bidang:</strong> {{ $request->business_type }} <br>
                                        <strong>Website:</strong> 
                                        <a href="{{ $request->company_website }}" target="_blank">
                                            {{ $request->company_website }}
                                        </a>
                                    </p>
                                </div>
                                <div class="card-footer bg-transparent border-success">
                                    Diterima pada: {{ \Carbon\Carbon::parse($request->created_at)->format('d M Y') }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection
