@extends('layouts.navbar')

@section('title', 'Hubungi Kami - Alpha Linear')

@section('content')

{{-- HERO SECTION --}}
<div class="px-4 py-5 text-center bg-light" data-aos="fade-in">
    <h1 class="display-5 fw-bold">Hubungi Kami</h1>
    <p class="lead text-muted col-lg-8 mx-auto">
        Kami siap membantu Anda. Jangan ragu untuk menghubungi kami melalui informasi di bawah atau kirimkan pesan langsung melalui formulir.
    </p>
</div>

{{-- BAGIAN INFORMASI UTAMA & FORMULIR --}}
<div class="container py-5">
    <div class="row g-5">
        {{-- Kolom Kiri: Informasi Kontak & Peta --}}
        <div class="col-lg-5" data-aos="fade-right" data-aos-delay="200">
            <div class="card shadow-sm mb-4">
                <div class="card-body p-4">
                    <h3 class="card-title mb-4">Informasi Kontak</h3>
                    <ul class="list-unstyled">
                        <li class="d-flex mb-3">
                            <i class="bi bi-geo-alt-fill fs-4 text-primary me-3"></i>
                            <div>
                                <strong>Alamat Kantor Pusat:</strong><br>
                                Jalan Telekomunikasi No. 123, Jakarta Selatan, Indonesia, 12345
                            </div>
                        </li>
                        <li class="d-flex mb-3">
                            <i class="bi bi-telephone-fill fs-4 text-primary me-3"></i>
                            <div>
                                <strong>Telepon:</strong><br>
                                (021) 555-0123
                            </div>
                        </li>
                        <li class="d-flex">
                            <i class="bi bi-envelope-fill fs-4 text-primary me-3"></i>
                            <div>
                                <strong>Email:</strong><br>
                                info@alphalinear.com
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="ratio ratio-16x9 rounded shadow-sm">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126927.4988317765!2d106.74523912759299!3d-6.22974006138982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e945e34b9d%3A0x5371bf0fdad786a2!2sJakarta%2C%20Indonesia!5e0!3m2!1sen!2sus!4v1678886450123!5m2!1sen!2sus" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>

        {{-- Kolom Kanan: Formulir Kontak --}}
        <div class="col-lg-7" data-aos="fade-left" data-aos-delay="300">
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <h3 class="mb-4">Kirimkan Pesan</h3>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        {{-- Isi form seperti sebelumnya --}}
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Alamat Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subjek</label>
                            <input type="text" class="form-control" id="subject" name="subject" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Pesan Anda</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 btn-lg">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- BAGIAN BARU 1: JAM OPERASIONAL --}}
<div class="bg-light">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6 text-center text-md-start" data-aos="fade-right">
                <i class="bi bi-clock-history fs-1 text-primary mb-3"></i>
                <h2 class="fw-bold">Jam Operasional</h2>
                <p class="lead text-muted">Tim kami siap melayani Anda pada jam kerja untuk respons yang cepat dan efektif.</p>
                <ul class="list-unstyled">
                    <li><strong>Senin - Jumat:</strong> 08:00 - 17:00 WIB</li>
                    <li><strong>Sabtu, Minggu & Hari Libur Nasional:</strong> Tutup</li>
                </ul>
            </div>
            <div class="col-md-6 d-flex align-items-center" data-aos="fade-left" data-aos-delay="100">
                <div class="alert alert-info w-100">
                    <strong>Diluar jam kerja?</strong> Tidak masalah. Silakan kirim pesan melalui formulir di atas dan kami akan menghubungi Anda kembali pada hari kerja berikutnya.
                </div>
            </div>
        </div>
    </div>
</div>

{{-- BAGIAN BARU 2: TERHUBUNG DENGAN TIM YANG TEPAT --}}
<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold" data-aos="fade-up">Terhubung dengan Tim yang Tepat</h2>
        <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">Arahkan pertanyaan Anda ke departemen yang sesuai untuk penanganan yang lebih cepat.</p>
    </div>
    <div class="row g-4">
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="text-center">
                <i class="bi bi-telephone-inbound-fill fs-2 text-success mb-3"></i>
                <h4 class="fw-bold">Penjualan & Proyek Baru</h4>
                <p class="text-muted">Untuk pertanyaan seputar layanan, penawaran, dan kemitraan baru.</p>
                <a href="mailto:sales@alphalinear.com">sales@alphalinear.com</a>
            </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="text-center">
                <i class="bi bi-headset fs-2 text-success mb-3"></i>
                <h4 class="fw-bold">Dukungan Teknis</h4>
                <p class="text-muted">Jika Anda adalah klien kami dan membutuhkan bantuan teknis atau melaporkan masalah.</p>
                <a href="mailto:support@alphalinear.com">support@alphalinear.com</a>
            </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
            <div class="text-center">
                <i class="bi bi-briefcase-fill fs-2 text-success mb-3"></i>
                <h4 class="fw-bold">Karir & SDM</h4>
                <p class="text-muted">Tertarik untuk bergabung dengan tim kami? Kirimkan CV dan pertanyaan Anda di sini.</p>
                <a href="mailto:hr@alphalinear.com">hr@alphalinear.com</a>
            </div>
        </div>
    </div>
</div>

@endsection