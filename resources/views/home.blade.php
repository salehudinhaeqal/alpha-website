@extends('layouts.navbar')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection
@section('bootstrap')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
@endsection
@section('title', 'Home - Alpha Linear')
@section('content')
    <div class="container">
        <h1 class="mt-5">Welcome to Alpha Linear</h1>
        <p class="lead">Telecommunication & Network Solutions</p>
        <p>Explore our services, news, and career opportunities.</p>
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
    <div class="row mt-4">
        {{-- Kolom 1: Telecommunication --}}
        <div class="col-md-4 text-center">
            {{-- ICON DITAMBAHKAN DI SINI --}}
            <i class="bi bi-broadcast-pin fs-1 text-primary mb-3"></i>
            <h2>Telecommunication Installation</h2>
            <p>We provide two main services, namely regular preventive maintenance and field corrective solution for mobile operator sites.</p>
            <a class="btn btn-secondary" href="#">View Services &raquo;</a>
        </div>

        {{-- Kolom 2: Power Service --}}
        <div class="col-md-4 text-center">
            {{-- ICON DITAMBAHKAN DI SINI --}}
            <i class="bi bi-lightning-charge-fill fs-1 text-primary mb-3"></i>
            <h2>Power Service</h2>
            <p>We focus on providing a comprehensive energy solution (renewable energy) for any kind of infrastructures which aims to achieve operational cost efficiency.</p>
            <a class="btn btn-secondary" href="#">View Services &raquo;</a>
        </div>

        {{-- Kolom 3: Maintenance Service --}}
        <div class="col-md-4 text-center">
            {{-- ICON DITAMBAHKAN DI SINI --}}
            <i class="bi bi-tools fs-1 text-primary mb-3"></i>
            <h2>Maintenance Service</h2>
            <p>Telecommunication maintenance services encompass a range of activities aimed at ensuring the reliable and efficient operation of telecommunications networks and equipment.</p>
            <a class="btn btn-secondary" href="#">View Services &raquo;</a>
        </div>
    </div>
    </div>
@endsection