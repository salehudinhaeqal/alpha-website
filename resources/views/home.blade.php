@extends('layouts.navbar')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection
@section('bootstrap')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
@endsection
@section('title', 'Home - Alpha Linear')
@section('content')
    <div class="px-4 py-5 my-5 text-center bg-light rounded-3">
        {{-- Judul utama yang lebih besar dan tebal --}}
        <h1 class="display-4 fw-bold">Welcome to Alpha Linear</h1>

        {{-- Paragraf pengenalan yang dibuat lebih ringkas dan mudah dibaca --}}
        <div class="col-lg-8 mx-auto">
            <p class="lead mb-4 text-muted">
                Spesialis penyedia layanan instalasi, perawatan, dan solusi energi untuk infrastruktur telekomunikasi. Dengan komitmen pada kualitas dan inovasi, kami memastikan jaringan Anda beroperasi dengan keandalan dan efisiensi maksimal.
            </p>

            {{-- Tombol Call to Action untuk mengarahkan pengunjung --}}
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a href="/service" class="btn btn-outline-secondary btn-lg px-4 gap-3">Lihat Layanan Kami</a>
                <a href="/contact" class="btn btn-outline-secondary btn-lg px-4">Hubungi Kami</a>
            </div>
        </div>
    </div>
    <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="/images/telco-tower.png" class="d-block w-100" alt="Telecommunication Tower">
        </div>
        <div class="carousel-item">
        <img src="/images/power-telco.png" class="d-block w-100" alt="Power Telecommunication">
        </div>
        <div class="carousel-item">
        <img src="/images/Maintenance.png" class="d-block w-100" alt="Maintenance Service">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
    {{-- Ganti seluruh blok .row ini dengan yang baru --}}
    <div class="row mt-4 g-4">
        {{-- Kolom 1: Telecommunication --}}
        <div class="col-md-4 d-flex">
            <div class="card h-100 shadow-sm text-center">
                <div class="card-body d-flex flex-column p-4">
                    <i class="bi bi-broadcast-pin fs-1 text-primary mb-3"></i>
                    <h2 class="h4 card-title">Telecommunication Installation</h2>
                    <p class="card-text text-muted">
                        We provide two main services, namely regular preventive maintenance and field corrective solution for mobile operator sites.
                    </p>
                    {{-- mt-auto akan mendorong tombol ini ke bagian bawah kartu --}}
                    <div class="mt-auto">
                        <a class="btn btn-secondary" href="/service">View Services &raquo;</a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Kolom 2: Power Service --}}
        <div class="col-md-4 d-flex">
            <div class="card h-100 shadow-sm text-center">
                <div class="card-body d-flex flex-column p-4">
                    <i class="bi bi-lightning-charge-fill fs-1 text-primary mb-3"></i>
                    <h2 class="h4 card-title">Power Service</h2>
                    <p class="card-text text-muted">
                        We focus on providing a comprehensive energy solution (renewable energy) for any kind of infrastructures which aims to achieve operational cost efficiency.
                    </p>
                    <div class="mt-auto">
                        <a class="btn btn-secondary" href="/service">View Services &raquo;</a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Kolom 3: Maintenance Service --}}
        <div class="col-md-4 d-flex">
            <div class="card h-100 shadow-sm text-center">
                <div class="card-body d-flex flex-column p-4">
                    <i class="bi bi-tools fs-1 text-primary mb-3"></i>
                    <h2 class="h4 card-title">Maintenance Service</h2>
                    <p class="card-text text-muted">
                        Telecommunication maintenance services encompass a range of activities aimed at ensuring the reliable and efficient operation of telecommunications networks and equipment.
                    </p>
                    <div class="mt-auto">
                        <a class="btn btn-secondary" href="/service">View Services &raquo;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection