@extends('layouts.navbar')

@section('title', 'Hubungi Kami - Alpha Linear')

@section('content')

{{-- 1. HERO SECTION BARU DENGAN BACKGROUND ABU-ABU --}}
<div class="px-4 py-5 text-center bg-light" data-aos="fade-in">
    <h1 class="display-5 fw-bold">Hubungi Kami</h1>
    <p class="lead text-muted col-lg-8 mx-auto">
        Kami siap membantu Anda. Jangan ragu untuk menghubungi kami melalui informasi di bawah atau kirimkan pesan langsung melalui formulir.
    </p>
</div>

<div class="container py-5">
    <div class="row g-5">

        {{-- Kolom Kiri: Informasi Kontak & Peta --}}
        <div class="col-lg-5" data-aos="fade-right" data-aos-delay="200">
            {{-- 2. INFORMASI KONTAK DALAM CARD --}}
            <div class="card shadow-sm mb-4">
                <div class="card-body p-4">
                    <h3 class="card-title mb-4">Informasi Kontak</h3>
                    <ul class="list-unstyled">
                        <li class="d-flex mb-3">
                            <i class="bi bi-geo-alt-fill fs-4 text-primary me-3"></i>
                            <div>
                                <strong>Alamat:</strong><br>
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

            {{-- Peta --}}
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
            {{-- 3. FORMULIR DENGAN GAYA YANG DISESUAIKAN --}}
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
@endsection