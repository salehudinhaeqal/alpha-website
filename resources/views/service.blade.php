@extends('layouts.navbar')

@section('title', 'Layanan Kami - Alpha Linear')

@section('content')

{{-- 1. HERO SECTION DENGAN ANIMASI --}}
<div class="px-4 py-5 text-center bg-light" data-aos="fade-in">
    <h1 class="display-5 fw-bold">Layanan Profesional Kami</h1>
    <p class="lead text-muted col-lg-8 mx-auto">
        Jelajahi solusi lengkap yang kami tawarkan untuk memastikan infrastruktur jaringan telekomunikasi Anda berjalan optimal, efisien, dan andal.
    </p>
</div>


<div class="container py-5">
    {{-- Baris Layanan --}}
    <div class="row g-4">

        {{-- Kolom 1: Telecommunication Installation --}}
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center p-4">
                    <i class="bi bi-broadcast-pin fs-1 text-primary mb-3"></i>
                    <h3 class="card-title h4">Telecommunication Installation</h3>
                    <p class="card-text text-muted">
                        Kami menyediakan layanan instalasi infrastruktur telekomunikasi yang presisi dan andal, mulai dari pembangunan situs baru hingga peningkatan kapasitas jaringan yang sudah ada.
                    </p>
                    <ul class="list-unstyled text-start mt-3">
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i>Pemasangan Infrastruktur BTS</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i>Solusi Perawatan Preventif</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i>Layanan Perbaikan Korektif</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i>Optimalisasi & Peningkatan Jaringan</li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Kolom 2: Power Service --}}
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center p-4">
                    <i class="bi bi-lightning-charge-fill fs-1 text-primary mb-3"></i>
                    <h3 class="card-title h4">Power Service</h3>
                    <p class="card-text text-muted">
                        Fokus kami adalah menyediakan solusi energi yang komprehensif, termasuk energi terbarukan, untuk menekan biaya operasional dan memastikan catu daya yang stabil untuk semua infrastruktur.
                    </p>
                    <ul class="list-unstyled text-start mt-3">
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i>Implementasi Panel Surya</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i>Sistem Manajemen Baterai</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i>Audit & Optimalisasi Energi</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i>Penyediaan Catu Daya Cadangan</li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Kolom 3: Maintenance Service --}}
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center p-4">
                    <i class="bi bi-tools fs-1 text-primary mb-3"></i>
                    <h3 class="card-title h4">Maintenance Service</h3>
                    <p class="card-text text-muted">
                        Layanan perawatan kami menjamin keandalan dan efisiensi jaringan Anda. Kami meminimalkan downtime dan memaksimalkan performa melalui pemantauan proaktif dan perbaikan cepat.
                    </p>
                    <ul class="list-unstyled text-start mt-3">
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i>Pemantauan Jaringan 24/7</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i>Inspeksi Perangkat Rutin</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i>Manajemen Suku Cadang</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i>Laporan Kinerja & Analisis</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{-- Bagian Call to Action --}}
    <div class="text-center mt-5 p-4 rounded cta-gradient" data-aos="fade-up" data-aos-delay="400">
        <h2>Siap Meningkatkan Jaringan Anda?</h2>
        <p class="lead">Diskusikan kebutuhan proyek Anda dengan tim ahli kami untuk mendapatkan solusi yang paling tepat dan efisien.</p>
        <a href="/contact" class="btn btn-light btn-lg fw-bold">Hubungi Kami</a>
    </div>

</div>
@endsection