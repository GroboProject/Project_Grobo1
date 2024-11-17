@extends('layout.main')

@section('content')
    <section id="globe" class="about-background py-1">
        <div class="container text-center text-white">
            <img src="{{ asset('assets/jpg/globe.gif') }}" alt="Animation GIF" class="img-fluid">
        </div>
    </section>


    <section id="list" style="background-color: #1A242F">
        <div class="container my-5 py-5 text-center mb-3">
            <h2 class="mb-4">Jaringan Distribusi</h2>
            <hr class="mx-auto my-3" style="width: 50%; height: 2px; background-color: #ffffff; border: none;">
            <br>
            <div class="row justify-content-center">
                <!-- Card 1 -->
                <div class="col-md-8 mb-4">
                    <div class="card">
                        <div class="card-header bg-transparent border-success">Header 1</div>
                        <div class="card-body text-success">
                            <h5 class="card-title">Card Title 1</h5>
                            <p class="card-text">This is the first card's content. It spans the full width of the container
                                and is responsive.</p>
                        </div>
                        <div class="card-footer bg-transparent border-success">Footer 1</div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-8 mb-4">
                    <div class="card">
                        <div class="card-header bg-transparent border-primary">Header 2</div>
                        <div class="card-body text-primary">
                            <h5 class="card-title">Card Title 2</h5>
                            <p class="card-text">This is the second card's content, and it will be displayed below the first
                                card.</p>
                        </div>
                        <div class="card-footer bg-transparent border-primary">Footer 2</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endSection
