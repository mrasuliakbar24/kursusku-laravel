@extends('layouts.app')

@section('title', 'Beranda - KursusKu')

@section('content')

<section class="hero-panel p-4 p-lg-5 mb-5">
    <div class="row align-items-center g-4">
        <div class="col-lg-7">
            <span class="eyebrow">Kursus teknologi untuk mahasiswa</span>

            <h1 class="display-5 fw-bold mt-3">
                Belajar lebih terarah bersama {{ $siteName }}
            </h1>

            <p class="lead text-secondary mt-3">
                Pilih kursus, pelajari teknologi, dan tingkatkan kemampuan
                pemrograman bersama KursusKu.
            </p>

            <a href="{{ route('enrollments.create') }}"
               class="btn btn-primary btn-lg mt-2">
                Daftar Kursus
            </a>
        </div>

        <div class="col-lg-5">
     <img
    src="{{ asset('images/hero-kursus.jpg') }}"
    alt="Belajar teknologi KursusKu"
    class="img-fluid rounded-4"
    style="width: 100%; height: 380px; object-fit: cover;"
>
        </div>
    </div>
</section>

<section class="mb-5">
    <h2 class="h3 fw-bold mb-4">Kursus Pilihan</h2>

    <div class="row g-4">
        @foreach ($featured as $course)
            <div class="col-md-4">
                <div class="card feature-card h-100 shadow-sm">
                    <div class="card-body p-4">
                        <span class="eyebrow">{{ $course['code'] }}</span>

                        <h3 class="h5 fw-bold mt-2">
                            {{ $course['name'] }}
                        </h3>

                        <p class="text-secondary">
                            {{ $course['description'] }}
                        </p>

                        <a href="{{ route('enrollments.create') }}"
                           class="btn btn-outline-primary">
                            Pilih Kursus
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

@endsection
