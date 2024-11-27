@extends('layout.main2')

@section('title', 'Feedback')

@section('contents')

    <div class="content-wrapper">
        <h1 class="mb-4 mt-3">Detail Feedback</h1>
        <hr class="mx-auto my-3">
        <div class="container mt-4">
            <table class="table table-bordered table-striped" style="table-layout: fixed; width: 100%;">
                <tbody>
                    <tr>
                        <th scope="row">Nama</th>
                        <td>{{ $feedback->name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Email</th>
                        <td>{{ $feedback->email }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Feedback</th>
                        <td>{{ $feedback->message }}</td>
                    </tr>
                </tbody>
            </table>

            <!-- Button Kembali -->
            <div class="d-flex justify-content-start pe-3">
                <a href="/admin/feedback" class="btn btn-primary btn-sm">
                    <i class="bi bi-arrow-left-circle"></i> Kembali
                </a>
            </div>
        </div>
    </div>

@endSection
