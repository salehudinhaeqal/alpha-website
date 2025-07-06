@extends('layouts.navbar')

@section('title', 'Layanan Kami - Alpha Linear')

@section('content')

{{-- HERO SECTION --}}
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
</div>

{{-- BAGIAN BARU 1: PROSES KERJA KAMI --}}
<div class="bg-light">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold" data-aos="fade-up">Proses Kerja Kami</h2>
            <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">Langkah terstruktur untuk hasil yang optimal.</p>
        </div>
        <div class="row g-4 text-center">
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-clipboard-data-fill fs-1 text-primary mb-3"></i>
                <h4 class="fw-bold">1. Konsultasi</h4>
                <p class="text-muted">Kami menganalisis kebutuhan unik Anda untuk merancang solusi yang paling efektif.</p>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                <i class="bi-clipboard-check-fill fs-1 text-primary mb-3"></i>
                <h4 class="fw-bold">2. Perencanaan</h4>
                <p class="text-muted">Desain teknis dan jadwal implementasi yang matang kami siapkan untuk efisiensi proyek.</p>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-gear-wide-connected fs-1 text-primary mb-3"></i>
                <h4 class="fw-bold">3. Implementasi</h4>
                <p class="text-muted">Eksekusi di lapangan oleh tim ahli dengan standar kualitas dan keamanan tertinggi.</p>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="500">
                <i class="bi bi-headset fs-1 text-primary mb-3"></i>
                <h4 class="fw-bold">4. Dukungan</h4>
                <p class="text-muted">Layanan pemeliharaan dan dukungan purna jual untuk memastikan performa jangka panjang.</p>
            </div>
        </div>
    </div>
</div>

{{-- BAGIAN BARU 2: FAQ (FREQUENTLY ASKED QUESTIONS) --}}
<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold" data-aos="fade-up">Frequently Asked Questions</h2>
        <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">Jawaban untuk beberapa pertanyaan umum.</p>
    </div>
    <div class="row">
        <div class="col-lg-8 mx-auto" data-aos="fade-up" data-aos-delay="200">
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                            Berapa lama waktu pengerjaan untuk instalasi situs baru?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Waktu pengerjaan sangat bervariasi tergantung pada kompleksitas lokasi dan jenis infrastruktur. Namun, setelah survei awal, kami akan memberikan estimasi jadwal yang detail dan realistis, biasanya berkisar antara 2 hingga 4 minggu untuk situs standar.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                            Apakah Anda menyediakan garansi untuk layanan energi terbarukan?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Tentu saja. Semua instalasi panel surya dan sistem manajemen baterai kami dilengkapi dengan garansi produk dari pabrikan serta garansi instalasi dari Alpha Linear untuk memastikan investasi Anda aman dan berkinerja optimal.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                            Area mana saja yang dijangkau oleh layanan perawatan Anda?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Kami memiliki tim yang tersebar di berbagai wilayah strategis dan siap melayani kebutuhan perawatan di seluruh Indonesia. Silakan hubungi kami untuk mendiskusikan lokasi spesifik proyek Anda.
                        </div>
                    </div>
                </div>
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