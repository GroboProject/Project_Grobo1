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
                    <th scope="row" style="width: 25%;">Nama</th>
                    <td>PT naon weh lah</td>
                </tr>
                <tr>
                    <th scope="row" style="width: 25%;">Email</th>
                    <td>sjdoiasj@asmkdjasi.com</td>
                </tr>
                <tr>
                    <th scope="row" style="width: 25%;">feedback</th>
                    <td style="white-space: normal; word-wrap: break-word; overflow-wrap: break-word;">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore iusto illo obcaecati tenetur
                        praesentium corrupti id quo mollitia et culpa aliquid delectus, omnis eius fugit tempore
                        nostrum earum beatae nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </td>
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
