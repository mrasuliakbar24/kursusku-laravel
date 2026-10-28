@extends('layouts.app')

@section('title', 'Beranda - KursusKu')

@section('content')

{{-- HERO SECTION --}}
<section class="hero hero-kurumi mb-5">
    <div class="row align-items-center g-4">
        <div class="col-lg-8">
            <span class="badge badge-kurumi mb-3">
                KURSUS TEKNOLOGI UNTUK MAHASISWA
            </span>

            <h1 class="display-5 fw-bold text-white mb-3">
                Belajar Lebih Terarah,
                <span class="text-rose">Wujudkan Masa Depan.</span>
            </h1>

            <p class="lead text-light mb-4">
                Tingkatkan keterampilan digitalmu bersama KursusKu.
                Pilih kursus, periksa ketersediaan kursi, dan daftar
                dengan mudah untuk memulai perjalanan belajarmu.
            </p>

            <a href="{{ route('enrollments.create') }}"
               class="btn btn-daftar-kursus btn-lg px-4">
                Daftar Kursus <span class="ms-2">&rarr;</span>
            </a>

            <a href="{{ route('courses.index') }}"
               class="btn btn-outline-light btn-lg px-4 ms-sm-2 mt-2 mt-sm-0">
                Lihat Kursus
            </a>
        </div>

        <div class="col-lg-4">
            <div class="hero-decoration">
                <div class="hero-letter">K</div>
                <p class="text-rose fw-bold mb-1">KURSUSKU</p>
                <p class="text-light small mb-0">
                    Learn Today. Build Tomorrow.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- KEUNGGULAN --}}
<section class="mb-5">
    <div class="row g-3">
        <div class="col-md-4">
            <div class="feature-card h-100 p-4">
                <div class="feature-icon mb-3">01</div>
                <h3 class="h5 fw-bold">Belajar Fleksibel</h3>
                <p class="text-secondary mb-0">
                    Pelajari keterampilan teknologi sesuai kebutuhan
                    dan tujuan belajarmu.
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-card h-100 p-4">
                <div class="feature-icon mb-3">02</div>
                <h3 class="h5 fw-bold">Materi Terarah</h3>
                <p class="text-secondary mb-0">
                    Mulai dari dasar pemrograman hingga mengenal
                    pengembangan aplikasi web.
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-card h-100 p-4">
                <div class="feature-icon mb-3">03</div>
                <h3 class="h5 fw-bold">Kembangkan Skill</h3>
                <p class="text-secondary mb-0">
                    Bangun kemampuan digital sebagai bekal
                    untuk studi dan karier.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- DAFTAR KURSUS --}}
<section class="courses-section mb-4">
    <div class="d-flex flex-wrap justify-content-between
                align-items-center gap-3 mb-4">
        <div>
            <span class="section-eyebrow">PILIH PERJALANANMU</span>
            <h2 class="h3 fw-bold mt-2 mb-1">Kursus Tersedia</h2>
            <p class="text-secondary mb-0">
                Temukan materi yang cocok untuk meningkatkan kemampuanmu.
            </p>
        </div>

        <a href="{{ route('courses.index') }}"
           class="btn btn-outline-kurumi">
            Semua Kursus &rarr;
        </a>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card course-card h-100">
                <div class="course-card-top">HTML · CSS · WEB</div>
                <div class="card-body p-4">
                    <span class="course-label">PEMULA</span>
                    <h3 class="h5 fw-bold mt-3">Web Dasar</h3>
                    <p class="text-secondary">
                        Mengenal HTML, CSS, dan dasar-dasar membangun
                        halaman web.
                    </p>
                    <a href="{{ route('enrollments.create') }}"
                       class="course-link">
                        Daftar kursus <span>&rarr;</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card course-card h-100">
                <div class="course-card-top">PHP · LOGIKA · BACKEND</div>
                <div class="card-body p-4">
                    <span class="course-label">PEMULA</span>
                    <h3 class="h5 fw-bold mt-3">PHP Dasar</h3>
                    <p class="text-secondary">
                        Pelajari logika pemrograman sisi server
                        menggunakan bahasa PHP.
                    </p>
                    <a href="{{ route('enrollments.create') }}"
                       class="course-link">
                        Daftar kursus <span>&rarr;</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card course-card h-100">
                <div class="course-card-top">LARAVEL · BLADE · ROUTE</div>
                <div class="card-body p-4">
                    <span class="course-label">PENGEMBANGAN WEB</span>
                    <h3 class="h5 fw-bold mt-3">Laravel Dasar</h3>
                    <p class="text-secondary">
                        Kenali route, Blade, dan struktur aplikasi
                        menggunakan framework Laravel.
                    </p>
                    <a href="{{ route('enrollments.create') }}"
                       class="course-link">
                        Daftar kursus <span>&rarr;</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection