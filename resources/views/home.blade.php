@extends('layouts.navbar')

@section('title', 'Home - Alpha Linear')

@section('content')

{{-- HERO SECTION --}}
<div class="px-4 py-5 my-5 text-center bg-light rounded-3">
    <h1 class="display-4 fw-bold" data-aos="fade-down">Welcome to Alpha Linear</h1>
    <div class="col-lg-8 mx-auto">
        <p class="lead mb-4 text-muted" data-aos="fade-up" data-aos-delay="100">
            Spesialis penyedia layanan instalasi, perawatan, dan solusi energi untuk infrastruktur telekomunikasi. Dengan komitmen pada kualitas dan inovasi, kami memastikan jaringan Anda beroperasi dengan keandalan dan efisiensi maksimal.
        </p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center" data-aos="fade-up" data-aos-delay="200">
            <a href="/service" class="btn btn-primary btn-lg px-4 gap-3">Lihat Layanan Kami</a>
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

{{-- BAGIAN STATISTIK KUNCI --}}
<div class="container py-5 text-center">
    <h2 class="fw-bold" data-aos="fade-up">Solusi Infrastruktur Telekomunikasi End-to-End</h2>
    <p class="lead text-muted col-lg-8 mx-auto" data-aos="fade-up" data-aos-delay="100">
        Dari perencanaan hingga pemeliharaan, kami menyediakan siklus layanan lengkap yang dirancang untuk keandalan dan performa tertinggi.
    </p>
    <div class="row mt-4 text-center" data-aos="fade-up" data-aos-delay="200">
        <div class="col-md-4">
            <h3 class="display-4 fw-bold text-primary">10+</h3>
            <p class="text-muted">Tahun Pengalaman</p>
        </div>
        <div class="col-md-4">
            <h3 class="display-4 fw-bold text-primary">500+</h3>
            <p class="text-muted">Proyek Terselesaikan</p>
        </div>
        <div class="col-md-4">
            <h3 class="display-4 fw-bold text-primary">99.9%</h3>
            <p class="text-muted">Network Uptime</p>
        </div>
    </div>
</div>


{{-- KOLOM LAYANAN (4 KOLOM) --}}
<div class="bg-light">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold" data-aos="fade-up">Layanan Unggulan Kami</h2>
        </div>
        <div class="row g-4">
            {{-- Kolom 1: Telecommunication --}}
            <div class="col-md-6 col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 shadow-sm text-center">
                    <div class="card-body d-flex flex-column p-4">
                        <i class="bi bi-broadcast-pin fs-1 text-primary mb-3"></i>
                        <h3 class="h4 card-title">Telecommunication Installation</h3>
                        <p class="card-text text-muted small">
                            Layanan instalasi presisi, mulai dari pembangunan menara baru hingga optimalisasi jaringan untuk jangkauan dan kapasitas maksimal.
                        </p>
                        <div class="mt-auto">
                            <a class="btn btn-secondary" href="/service">View Services &raquo;</a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Kolom 2: Power Service --}}
            <div class="col-md-6 col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="200">
                 <div class="card h-100 shadow-sm text-center">
                    <div class="card-body d-flex flex-column p-4">
                        <i class="bi bi-lightning-charge-fill fs-1 text-primary mb-3"></i>
                        <h3 class="h4 card-title">Power Service</h3>
                        <p class="card-text text-muted small">
                            Solusi energi komprehensif termasuk energi terbarukan untuk efisiensi biaya operasional dan catu daya yang stabil.
                        </p>
                        <div class="mt-auto">
                            <a class="btn btn-secondary" href="/service">View Services &raquo;</a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Kolom 3: Maintenance Service --}}
            <div class="col-md-6 col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 shadow-sm text-center">
                    <div class="card-body d-flex flex-column p-4">
                        <i class="bi bi-tools fs-1 text-primary mb-3"></i>
                        <h3 class="h4 card-title">Maintenance Service</h3>
                        <p class="card-text text-muted small">
                           Layanan perawatan proaktif 24/7 untuk menjamin keandalan jaringan, meminimalkan downtime, dan memaksimalkan performa.
                        </p>
                        <div class="mt-auto">
                            <a class="btn btn-secondary" href="/service">View Services &raquo;</a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Kolom 4: Network Optimization --}}
            <div class="col-md-6 col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="400">
                <div class="card h-100 shadow-sm text-center">
                    <div class="card-body d-flex flex-column p-4">
                        <i class="bi bi-reception-4 fs-1 text-primary mb-3"></i>
                        <h3 class="h4 card-title">Network Optimization</h3>
                        <p class="card-text text-muted small">
                           Analisis dan optimalisasi performa jaringan untuk meningkatkan kecepatan, stabilitas, dan pengalaman pengguna.
                        </p>
                        <div class="mt-auto">
                            <a class="btn btn-secondary" href="/service">View Services &raquo;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- BAGIAN KEUNGGULAN KAMI --}}
<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold" data-aos="fade-up">Keunggulan Kompetitif Alpha Linear</h2>
    </div>
    <div class="row g-4">
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="text-center">
                <i class="bi bi-shield-check fs-1 text-success mb-3"></i>
                <h4 class="fw-bold">Keandalan Teruji</h4>
                <p class="text-muted">Komitmen kami pada standar tertinggi memastikan setiap proyek dijalankan dengan presisi untuk hasil yang tahan lama.</p>
            </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="text-center">
                <i class="bi bi-lightbulb-fill fs-1 text-success mb-3"></i>
                <h4 class="fw-bold">Inovasi Berkelanjutan</h4>
                <p class="text-muted">Kami terus mengadopsi teknologi terbaru, termasuk solusi energi terbarukan, untuk memberikan efisiensi terbaik bagi Anda.</p>
            </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
             <div class="text-center">
                <i class="bi bi-headset fs-1 text-success mb-3"></i>
                <h4 class="fw-bold">Dukungan Penuh 24/7</h4>
                <p class="text-muted">Tim ahli kami selalu siaga untuk memberikan dukungan teknis dan pemeliharaan proaktif kapan pun dibutuhkan.</p>
            </div>
        </div>
    </div>
</div>

{{-- BAGIAN CALL TO ACTION --}}
<div class="text-center p-4 rounded cta-gradient" data-aos="fade-in" data-aos-duration="1000">
    <h2>Siap Meningkatkan Jaringan Anda?</h2>
    <p class="lead">Diskusikan kebutuhan proyek Anda dengan tim ahli kami untuk mendapatkan solusi yang paling tepat dan efisien.</p>
    <a href="/contact" class="btn btn-light btn-lg fw-bold">Hubungi Kami</a>
</div>

@endsection