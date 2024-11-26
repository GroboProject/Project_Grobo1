@extends('layout.main2')

@section('title', 'Dashboard')

@section('contents')
<div class="container" style="padding-left: 170px;">
    <h1 class="mb-4">Dashboard Admin</h1>
    <div class="row">
        <!-- Total News -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Total Berita</h5>
                    <p class="card-text fs-4">{{ $totalNews }}</p>
                </div>
            </div>
        </div>

        <!-- Total Requests -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Total Permintaan</h5>
                    <p class="card-text fs-4">{{ $totalRequests }}</p>
                </div>
            </div>
        </div>

        <!-- Total Approved Companies -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Total Perusahaan yang Disetujui</h5>
                    <p class="card-text fs-4">{{ $totalApprovedCompanies }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
