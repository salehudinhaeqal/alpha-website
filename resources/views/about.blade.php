@extends('layouts.navbar')

@section('title', 'Tentang Kami - Alpha Linear')

@section('content')

{{-- 1. HERO SECTION BARU --}}
<div class="px-4 py-5 text-center bg-light">
    <h1 class="display-5 fw-bold" data-aos="fade-down">Tentang Alpha Linear</h1>
    <div class="col-lg-8 mx-auto">
        <p class="lead mb-4 text-muted" data-aos="fade-up" data-aos-delay="100">
            Kami adalah mitra terpercaya Anda dalam industri telekomunikasi dan solusi jaringan. Berbekal pengalaman mendalam, kami berdedikasi untuk menyediakan layanan inovatif yang memastikan efisiensi operasional dan keandalan infrastruktur jaringan bagi setiap klien kami.
        </p>
    </div>
</div>

<div class="container py-5">
    {{-- 2. MISI & VISI DALAM CARD --}}
    <div class="row g-4 mb-5">
        <div class="col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="card shadow-sm w-100">
                <div class="card-body p-4">
                    <h3 class="card-title text-primary">Misi Kami</h3>
                    <p class="card-text">Menyediakan solusi telekomunikasi dan energi yang unggul, andal, dan efisien untuk mendukung kesuksesan operasional dan pertumbuhan bisnis klien kami melalui teknologi terdepan dan tim yang profesional.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="card shadow-sm w-100">
                <div class="card-body p-4">
                    <h3 class="card-title text-primary">Visi Kami</h3>
                    <p class="card-text">Menjadi pemimpin di industri solusi jaringan telekomunikasi di Indonesia, yang dikenal atas inovasi, kualitas layanan, dan komitmen kami dalam mengimplementasikan solusi energi yang berkelanjutan.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- 3. MENGAPA MEMILIH KAMI DENGAN IKON --}}
    <div class="text-center" data-aos="fade-up">
        <h2 class="fw-bold">Mengapa Memilih Kami?</h2>
        <p class="lead text-muted mb-5">Kemitraan yang kuat dibangun di atas kepercayaan dan hasil yang nyata.</p>
    </div>

    <div class="row g-4">
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="d-flex">
                <i class="bi bi-diagram-3-fill fs-2 text-success me-3"></i>
                <div>
                    <h4>Pengalaman Komprehensif</h4>
                    <p>Keahlian di tiga pilar utama: instalasi, perawatan, serta penyediaan solusi energi yang efisien untuk berbagai jenis infrastruktur.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="d-flex">
                <i class="bi bi-graph-up-arrow fs-2 text-success me-3"></i>
                <div>
                    <h4>Fokus pada Efisiensi Biaya</h4>
                    <p>Setiap solusi yang kami tawarkan dirancang untuk mencapai efisiensi biaya operasional yang maksimal bagi klien kami.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="d-flex">
                <i class="bi bi-lightbulb-fill fs-2 text-success me-3"></i>
                <div>
                    <h4>Inovasi Energi Terbarukan</h4>
                    <p>Berkomitmen pada masa depan yang berkelanjutan dengan berfokus pada penyediaan solusi energi terbarukan yang andal.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="d-flex">
                <i class="bi bi-people-fill fs-2 text-success me-3"></i>
                <div>
                    <h4>Tim Profesional dan Andal</h4>
                    <p>Tim ahli kami siap memberikan layanan terbaik untuk memastikan jaringan telekomunikasi Anda beroperasi dengan lancar.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- 4. BAGIAN CALL TO ACTION --}}
    <div class="text-center mt-5 p-4 rounded cta-gradient" data-aos="fade-in" data-aos-duration="1000">
        <h2>Siap Meningkatkan Jaringan Anda?</h2>
        <p class="lead">Diskusikan kebutuhan proyek Anda dengan tim ahli kami untuk mendapatkan solusi yang paling tepat dan efisien.</p>
        <a href="/contact" class="btn btn-light btn-lg fw-bold">Hubungi Kami</a>
    </div>

</div>
@endsection