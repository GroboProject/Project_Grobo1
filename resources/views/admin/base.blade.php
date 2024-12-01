@extends('layout.main2')

@section('title', 'Dashboard')

@section('contents')
    <div class="content-wrapper">
        <h1 class="mb-1 mt-2">Dashboard Admin</h1>
        <hr class="mx-auto my-3">
        <div class="row g-4">
            <!-- Total News -->
            <div class="col-sm-5 col-md-3">
                <div class="card shadow-sm h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title">Total Berita</h5>
                        <p class="card-text fs-4">{{ $totalNews }}</p>
                    </div>
                </div>
            </div>

            <!-- Total Requests -->
            <div class="col-sm-5 col-md-3">
                <div class="card shadow-sm h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title">Total Permintaan</h5>
                        <p class="card-text fs-4">{{ $totalRequests }}</p>
                    </div>
                </div>
            </div>

            <!-- Total Approved Companies -->
            <div class="col-sm-5 col-md-3">
                <div class="card shadow-sm h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title">Total Perusahaan yang Disetujui</h5>
                        <p class="card-text fs-4">{{ $totalApprovedCompanies }}</p>
                    </div>
                </div>
            </div>

            <!-- Total Feedback -->
            <div class="col-sm-5 col-md-3">
                <div class="card shadow-sm h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title">Total Feedback</h5>
                        <p class="card-text fs-4">{{ $totalFeedbacks }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
