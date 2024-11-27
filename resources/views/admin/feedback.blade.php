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
                                        <th>Nama </th>
                                        <th>Email</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>PT. ABC</td>
                                        <td>8b6wF@example.com</td>
                                        <td>
                                            <!-- Tombol untuk Edit -->
                                            <a href="/admin/detailFeedback" type="button" class="btn btn-primary btn-sm" 
                                                 >
                                                <i class="fa fa-eye"></i> detail
                                            </a>

                                            <!-- Tombol untuk Hapus -->
                                            <input type="hidden" name="_method" value="DELETE"> <button type="submit"
                                                class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i> Hapus
                                            </button>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endSection
