@extends('layouts.navbar')

@section('title', 'Tentang Kami - Alpha Linear')

@section('content')

{{-- HERO SECTION --}}
<div class="px-4 py-5 text-center bg-light" data-aos="fade-in">
    <h1 class="display-5 fw-bold">Tentang Alpha Linear</h1>
    <div class="col-lg-8 mx-auto">
        <p class="lead mb-4 text-muted">
            Kami adalah mitra terpercaya Anda dalam industri telekomunikasi dan solusi jaringan. Berbekal pengalaman mendalam, kami berdedikasi untuk menyediakan layanan inovatif yang memastikan efisiensi operasional dan keandalan infrastruktur jaringan bagi setiap klien kami.
        </p>
    </div>
</div>

<div class="container py-5">
    {{-- MISI & VISI DALAM CARD --}}
    <div class="row g-4 mb-5">
        <div class="col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="card shadow-sm w-100">
                <div class="card-body p-4 d-flex flex-column">
                    <h3 class="card-title text-primary">Misi Kami</h3>
                    <p class="card-text flex-grow-1">Menyediakan solusi telekomunikasi dan energi yang unggul, andal, dan efisien untuk mendukung kesuksesan operasional dan pertumbuhan bisnis klien kami melalui teknologi terdepan dan tim yang profesional.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="card shadow-sm w-100">
                <div class="card-body p-4 d-flex flex-column">
                    <h3 class="card-title text-primary">Visi Kami</h3>
                    <p class="card-text flex-grow-1">Menjadi pemimpin di industri solusi jaringan telekomunikasi di Indonesia, yang dikenal atas inovasi, kualitas layanan, dan komitmen kami dalam mengimplementasikan solusi energi yang berkelanjutan.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- BAGIAN JEJAK LANGKAH KAMI (TIMELINE) --}}
    <div class="py-5 bg-light rounded-3">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold" data-aos="fade-up">Jejak Langkah Kami</h2>
                <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">Perjalanan kami dalam membangun keunggulan.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="fw-bold text-primary">2015</h3>
                    <h5>Pendirian Alpha Linear</h5>
                    <p class="text-muted">Didirikan dengan visi untuk menjadi solusi satu atap bagi kebutuhan infrastruktur telekomunikasi di Indonesia.</p>
                </div>
                <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="300">
                    <h3 class="fw-bold text-primary">2019</h3>
                    <h5>Ekspansi ke Power Service</h5>
                    <p class="text-muted">Memperkenalkan layanan energi terbarukan sebagai komitmen kami pada inovasi dan efisiensi operasional.</p>
                </div>
                <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="400">
                    <h3 class="fw-bold text-primary">2023</h3>
                    <h5>Pencapaian 500+ Proyek</h5>
                    <p class="text-muted">Berhasil menyelesaikan lebih dari 500 proyek di seluruh negeri, membangun reputasi sebagai mitra yang andal.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- BAGIAN TIM PROFESIONAL KAMI --}}
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold" data-aos="fade-up">Tim Profesional Kami</h2>
            <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">Kekuatan kami terletak pada keahlian dan dedikasi tim.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="text-center">
                    <img src="https://via.placeholder.com/150" class="img-fluid rounded-circle mb-3" alt="Foto Anggota Tim">
                    <h5 class="fw-bold">Ahmad Salehudin Marwizal</h5>
                    <p class="text-primary">Founder & CEO</p>
                    <p class="text-muted small">Dengan pengalaman lebih dari 20 tahun di industri telekomunikasi, memimpin visi dan strategi perusahaan.</p>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="text-center">
                    <img src="https://via.placeholder.com/150" class="img-fluid rounded-circle mb-3" alt="Foto Anggota Tim">
                    <h5 class="fw-bold">Muhammad Haeqal Salehudin</h5>
                    <p class="text-primary">Head of Engineering</p>
                    <p class="text-muted small">Ahli dalam desain dan implementasi infrastruktur jaringan yang kompleks dan efisien.</p>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
                <div class="text-center">
                    <img src="https://via.placeholder.com/150" class="img-fluid rounded-circle mb-3" alt="Foto Anggota Tim">
                    <h5 class="fw-bold">Ahmad Farhan Salehudin</h5>
                    <p class="text-primary">Head of Operations</p>
                    <p class="text-muted small">Memastikan semua proyek berjalan lancar, tepat waktu, dan sesuai dengan standar kualitas tertinggi.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- BAGIAN MENGAPA MEMILIH KAMI --}}
    <div class="bg-light rounded-3 p-5 mt-4">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold">Mengapa Memilih Kami?</h2>
            <p class="lead text-muted">Kemitraan yang kuat dibangun di atas kepercayaan dan hasil yang nyata.</p>
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
            <div class="col-md-6" data-aos-_delay="300">
                <div class="d-flex">
                    <i class="bi bi-people-fill fs-2 text-success me-3"></i>
                    <div>
                        <h4>Tim Profesional dan Andal</h4>
                        <p>Tim ahli kami siap memberikan layanan terbaik untuk memastikan jaringan telekomunikasi Anda beroperasi dengan lancar.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- BAGIAN CALL TO ACTION --}}
    <div class="text-center mt-5 p-4 rounded cta-gradient" data-aos="fade-in" data-aos-duration="1000">
        <h2>Siap Meningkatkan Jaringan Anda?</h2>
        <p class="lead">Diskusikan kebutuhan proyek Anda dengan tim ahli kami untuk mendapatkan solusi yang paling tepat dan efisien.</p>
        <a href="/contact" class="btn btn-light btn-lg fw-bold">Hubungi Kami</a>
    </div>

</div>
@endsection