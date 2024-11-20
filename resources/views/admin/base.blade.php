@extends('layout.main2')

@section('title', 'Dashboard')

@section('contents')
<div class="content-wrapper">
    <h1 class="mb-4 mt-3">Welcome, Admin!</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Overview</h5>
                    <p class="card-text">Some quick stats or updates.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-secondary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Tasks</h5>
                    <p class="card-text">Pending tasks or reminders.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Performance</h5>
                    <p class="card-text">Performance analytics or reports.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
