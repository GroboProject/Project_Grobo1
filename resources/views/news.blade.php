@extends('layout.main')

@section('content')
    <section id="community">
        <div class="container my-5 py-5">
            <h2 class="text-capitalize m-0 py-lg-5">Berita Terkini</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card" onclick="window.location.href='/isiberita';" style="cursor: pointer;">
                        <div class="card h-100" id="card">
                            <img src="{{ asset('assets/jpg/berita1.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title" href="/berita">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                    additional
                                    content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card" onclick="window.location.href='/isiberita';" style="cursor: pointer;">
                        <div class="card h-100" id="card">
                            <img src="{{ asset('assets/jpg/berita1.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title" href="/berita">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                    additional
                                    content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card" onclick="window.location.href='/isiberita';" style="cursor: pointer;">
                        <div class="card h-100" id="card">
                            <img src="{{ asset('assets/jpg/berita1.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title" href="/berita">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                    additional
                                    content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card" onclick="window.location.href='/isiberita';" style="cursor: pointer;">
                        <div class="card h-100" id="card">
                            <img src="{{ asset('assets/jpg/berita1.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title" href="/berita">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                    additional
                                    content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card" onclick="window.location.href='/isiberita';" style="cursor: pointer;">
                        <div class="card h-100" id="card">
                            <img src="{{ asset('assets/jpg/berita1.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title" href="/berita">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                    additional
                                    content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endSection
