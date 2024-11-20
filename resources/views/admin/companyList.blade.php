@extends('layout.main2')

@section('title', 'Dashboard')

@section('contents')
<div class="content-wrapper">
    <h1 class="mb-4 mt-3">List Berita</h1>
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
                                    <th>Nama Perusahaan</th>
                                    <th>Bidang Perusahaan</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody> 
                                <!-- Konten tabel berita di sini gak usah pake php-->
                                
                                <tr>
                                    <td>1</td>
                                    <td>Perusahaan A</td>
                                    <td>Pertanian</td>
                                    <td>2023-07-25</td>
                                    <td>
                                        <a href="/admin/detail" class="btn btn-info btn-sm">
                                            <i class="fa fa-eye pe-2"></i>Detail
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash pe-2"></i>Hapus
                                        </a>
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
@endsection
