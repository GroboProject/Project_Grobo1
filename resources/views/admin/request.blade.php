@extends('layout.main2')

@section('title', 'Dashboard')

@section('contents')
    <div class="content-wrapper">
        <h1 class="mb-4 mt-3">Request</h1>
        <hr class="mx-auto my-3">
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4 mb-3">
                <div class="card border-dark">
                    <div class="card-header bg-transparent border-dark">Form : rezga@gmail.com</div>
                    <div class="card-body text-dark">
                        <h5 class="card-title">PT Mencari Ridho Allah SWT</h5>
                        <p class="card-text"></p>
                    </div>
                    <div class="card-footer bg-transparent border-dark">
                        <a href="/admin/detailCompany" type="button" class="btn btn-primary btn-sm">Detail</a>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4 mb-3">
                <div class="card border-dark">
                    <div class="card-header bg-transparent border-dark">Form : rezga@gmail.com</div>
                    <div class="card-body text-dark">
                        <h5 class="card-title">PT Mencari Ridho Allah SWT</h5>
                        <p class="card-text"></p>
                    </div>
                    <div class="card-footer bg-transparent border-dark">
                        <a href="/admin/detailCompany" type="button" class="btn btn-primary btn-sm">Detail</a>
                    </div>
                </div>
            </div>
            <!-- Tambahkan kartu baru di sini -->
        </div>
    </div>


@endsection
