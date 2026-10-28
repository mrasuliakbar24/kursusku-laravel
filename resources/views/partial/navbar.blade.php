```blade
<nav class="navbar navbar-expand-lg navbar-dark bg-kursusku shadow-sm">
    <div class="container">

        {{-- Logo dan nama website --}}
        <a class="navbar-brand fw-bold d-flex align-items-center gap-2"
           href="{{ route('home') }}">
            <span class="logo-kursusku">K</span>
            <span>Kursus<span class="text-merah">Ku</span></span>
        </a>

        {{-- Tombol menu untuk HP --}}
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#mainNavbar"
            aria-controls="mainNavbar"
            aria-expanded="false"
            aria-label="Buka navigasi">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Daftar navigasi --}}
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                       href="{{ route('home') }}">
                        Beranda
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('courses.*') ? 'active' : '' }}"
                       href="{{ route('courses.index') }}">
                        Course
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('enrollments.index') ? 'active' : '' }}"
                       href="{{ route('enrollments.index') }}">
                        Enrollment
                    </a>
                </li>

                <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                    <a class="btn btn-daftar-kursus"
                       href="{{ route('enrollments.create') }}">
                        Daftar Kursus
                        <span class="ms-1">&rarr;</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
```