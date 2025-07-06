@extends('layouts.navbar')

@section('title', 'Home - Alpha Linear')

@section('content')

{{-- HERO SECTION --}}
<div class="px-4 py-5 my-5 text-center bg-light rounded-3">
    {{-- Judul utama dengan animasi fade-down --}}
    <h1 class="display-4 fw-bold" data-aos="fade-down">Welcome to Alpha Linear</h1>

    {{-- Paragraf pengenalan --}}
    <div class="col-lg-8 mx-auto">
        <p class="lead mb-4 text-muted" data-aos="fade-up" data-aos-delay="100">
            Spesialis penyedia layanan instalasi, perawatan, dan solusi energi untuk infrastruktur telekomunikasi. Dengan komitmen pada kualitas dan inovasi, kami memastikan jaringan Anda beroperasi dengan keandalan dan efisiensi maksimal.
        </p>

        {{-- Tombol Call to Action --}}
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center" data-aos="fade-up" data-aos-delay="200">
            <a href="/service" class="btn btn-outline-secondary btn-lg px-4 gap-3">Lihat Layanan Kami</a>
            <a href="/contact" class="btn btn-outline-secondary btn-lg px-4">Hubungi Kami</a>
        </div>
    </div>
</div>

{{-- CAROUSEL SLIDER --}}
<div id="carouselExample" class="carousel slide" data-aos="fade-in" data-aos-duration="1000">
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

{{-- KOLOM LAYANAN --}}
<div class="container py-5">
    <div class="row g-4">
        {{-- Kolom 1: Telecommunication --}}
        <div class="col-md-4 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="card h-100 shadow-sm text-center">
                <div class="card-body d-flex flex-column p-4">
                    <i class="bi bi-broadcast-pin fs-1 text-primary mb-3"></i>
                    <h2 class="h4 card-title">Telecommunication Installation</h2>
                    <p class="card-text text-muted">
                        We provide two main services, namely regular preventive maintenance and field corrective solution for mobile operator sites.
                    </p>
                    <div class="mt-auto">
                        <a class="btn btn-secondary" href="/service">View Services &raquo;</a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Kolom 2: Power Service --}}
        <div class="col-md-4 d-flex" data-aos="fade-up" data-aos-delay="300">
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
        <div class="col-md-4 d-flex" data-aos="fade-up" data-aos-delay="400">
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