
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>KursusKu | Belajar Tanpa Batas</title>

    <meta name="theme-color" content="#171316">
    <meta name="description" content="KursusKu, platform belajar pemrograman dan pengembangan web.">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        :root {
            --kurumi-black: #171316;
            --kurumi-maroon: #641e2b;
            --kurumi-red: #8f263d;
            --kurumi-brown: #70483f;
            --kurumi-ivory: #f4e9e6;
            --kurumi-rose: #d8a5ac;
            --kurumi-muted: #c5afb5;
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            background: var(--kurumi-black);
            color: var(--kurumi-ivory);
            font-family: "Segoe UI", Arial, sans-serif;
            line-height: 1.7;
        }

        a {
            text-decoration: none;
        }

        .kurumi-container {
            width: min(1120px, 90%);
            margin: 0 auto;
        }

        /* Navbar */
        .kurumi-navbar {
            background: rgba(23, 19, 22, .96);
            border-bottom: 1px solid rgba(216, 165, 172, .22);
            position: sticky;
            top: 0;
            z-index: 100;
            backdrop-filter: blur(12px);
        }

        .kurumi-nav-inner {
            min-height: 76px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .kurumi-brand {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #fff;
            font-size: 23px;
            font-weight: 800;
            letter-spacing: .5px;
        }

        .kurumi-brand:hover {
            color: var(--kurumi-rose);
        }

        .kurumi-logo {
            width: 43px;
            height: 43px;
            display: grid;
            place-items: center;
            border-radius: 12px;
            background: linear-gradient(
                135deg,
                var(--kurumi-red),
                var(--kurumi-maroon)
            );
            color: white;
            box-shadow: 0 4px 18px rgba(143, 38, 61, .35);
        }

        .kurumi-nav-links {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 24px;
        }

        .kurumi-nav-links a {
            color: var(--kurumi-muted);
            font-size: 14px;
            font-weight: 600;
            transition: color .2s;
        }

        .kurumi-nav-links a:hover {
            color: var(--kurumi-rose);
        }

        .kurumi-nav-links .kurumi-login {
            border: 1px solid var(--kurumi-rose);
            border-radius: 8px;
            padding: 8px 15px;
            color: white;
        }

        /* Hero */
        .kurumi-hero {
            position: relative;
            overflow: hidden;
            padding: 100px 0 90px;
            background:
                radial-gradient(
                    ellipse at 85% 25%,
                    rgba(143, 38, 61, .35),
                    transparent 42%
                ),
                linear-gradient(
                    135deg,
                    #171316 0%,
                    #321821 55%,
                    #641e2b 100%
                );
            border-bottom: 1px solid rgba(216, 165, 172, .2);
        }

        .kurumi-hero-content {
            max-width: 760px;
        }

        .kurumi-label {
            display: inline-block;
            padding: 7px 14px;
            border: 1px solid rgba(216, 165, 172, .45);
            border-radius: 999px;
            color: var(--kurumi-rose);
            background: rgba(255, 255, 255, .04);
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .kurumi-hero h1 {
            color: #fff;
            font-size: clamp(40px, 7vw, 72px);
            line-height: 1.12;
            margin: 24px 0 20px;
            letter-spacing: -1.5px;
        }

        .kurumi-hero h1 span {
            color: var(--kurumi-rose);
        }

        .kurumi-hero p {
            max-width: 640px;
            color: #e0cbd0;
            font-size: 18px;
            margin: 0;
        }

        .kurumi-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
            margin-top: 32px;
        }

        .kurumi-button {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            min-height: 48px;
            padding: 12px 22px;
            border-radius: 9px;
            font-weight: 700;
            transition: .2s ease;
        }

        .kurumi-button-primary {
            color: white;
            background: linear-gradient(
                135deg,
                var(--kurumi-red),
                var(--kurumi-maroon)
            );
            border: 1px solid var(--kurumi-red);
            box-shadow: 0 8px 24px rgba(143, 38, 61, .24);
        }

        .kurumi-button-primary:hover {
            color: white;
            background: #a3314c;
            transform: translateY(-2px);
        }

        .kurumi-button-outline {
            color: white;
            border: 1px solid rgba(244, 233, 230, .5);
            background: rgba(255, 255, 255, .04);
        }

        .kurumi-button-outline:hover {
            color: white;
            border-color: var(--kurumi-rose);
            background: rgba(216, 165, 172, .1);
        }

        /* Information strip */
        .kurumi-strip {
            background: #21191d;
            border-bottom: 1px solid rgba(216, 165, 172, .16);
        }

        .kurumi-strip-inner {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            padding: 25px 0;
        }

        .kurumi-stat {
            text-align: center;
            padding: 8px;
        }

        .kurumi-stat strong {
            display: block;
            color: var(--kurumi-rose);
            font-size: 18px;
        }

        .kurumi-stat span {
            color: var(--kurumi-muted);
            font-size: 13px;
        }

        /* Features */
        .kurumi-section {
            padding: 78px 0;
        }

        .kurumi-section-heading {
            max-width: 650px;
            margin: 0 auto 38px;
            text-align: center;
        }

        .kurumi-section-heading small {
            color: var(--kurumi-rose);
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 800;
        }

        .kurumi-section-heading h2 {
            color: white;
            font-size: clamp(28px, 4vw, 40px);
            margin: 10px 0;
        }

        .kurumi-section-heading p {
            color: var(--kurumi-muted);
            margin: 0;
        }

        .kurumi-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 22px;
        }

        .kurumi-card {
            padding: 27px;
            border: 1px solid rgba(216, 165, 172, .2);
            border-radius: 16px;
            background: linear-gradient(
                145deg,
                #282024,
                #1d181b
            );
            transition: transform .25s, border-color .25s,
                        box-shadow .25s;
        }

        .kurumi-card:hover {
            transform: translateY(-5px);
            border-color: var(--kurumi-red);
            box-shadow: 0 14px 30px rgba(0, 0, 0, .2);
        }

        .kurumi-card-icon {
            display: grid;
            place-items: center;
            width: 54px;
            height: 54px;
            border-radius: 14px;
            background: rgba(143, 38, 61, .2);
            border: 1px solid rgba(216, 165, 172, .25);
            color: var(--kurumi-rose);
            font-size: 25px;
        }

        .kurumi-card h3 {
            color: white;
            font-size: 20px;
            margin: 20px 0 8px;
        }

        .kurumi-card p {
            color: var(--kurumi-muted);
            font-size: 14px;
            margin: 0 0 20px;
        }

        .kurumi-card a {
            color: var(--kurumi-rose);
            font-size: 14px;
            font-weight: 700;
        }

        .kurumi-card a:hover {
            color: white;
        }

        /* Call to action */
        .kurumi-cta {
            margin-bottom: 78px;
            padding: 45px 30px;
            border: 1px solid rgba(216, 165, 172, .25);
            border-radius: 20px;
            text-align: center;
            background: linear-gradient(
                120deg,
                #641e2b,
                #321821,
                #21191d
            );
        }

        .kurumi-cta h2 {
            color: white;
            font-size: clamp(25px, 4vw, 36px);
            margin: 0 0 12px;
        }

        .kurumi-cta p {
            color: #e0cbd0;
            margin: 0 auto 24px;
            max-width: 620px;
        }

        /* Footer */
        .kurumi-footer {
            border-top: 1px solid rgba(216, 165, 172, .2);
            background: #100e10;
            padding: 25px 0;
        }

        .kurumi-footer-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            flex-wrap: wrap;
        }

        .kurumi-footer p {
            color: var(--kurumi-muted);
            font-size: 13px;
            margin: 0;
        }

        .kurumi-footer strong {
            color: var(--kurumi-rose);
        }

        @media (max-width: 760px) {
            .kurumi-nav-inner {
                padding: 14px 0;
                align-items: flex-start;
                flex-direction: column;
            }

            .kurumi-nav-links {
                gap: 15px;
            }

            .kurumi-hero {
                padding: 65px 0;
            }

            .kurumi-strip-inner {
                grid-template-columns: 1fr;
                gap: 5px;
            }

            .kurumi-grid {
                grid-template-columns: 1fr;
            }

            .kurumi-section {
                padding: 55px 0;
            }

            .kurumi-cta {
                margin-bottom: 55px;
                padding: 35px 20px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                scroll-behavior: auto !important;
                transition: none !important;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <header class="kurumi-navbar">
        <div class="kurumi-container kurumi-nav-inner">
            <a href="{{ url('/') }}" class="kurumi-brand">
                <span class="kurumi-logo">K</span>
                <span>KursusKu</span>
            </a>

            <nav class="kurumi-nav-links" aria-label="Navigasi utama">
                <a href="{{ url('/') }}">Beranda</a>
                <a href="#fitur">Fitur</a>
                <a href="#tentang">Tentang</a>

                @if (Route::has('login'))
                    @auth
                        <a class="kurumi-login"
                           href="{{ url('/home') }}">Dashboard</a>
                    @else
                        <a class="kurumi-login"
                           href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Daftar</a>
                        @endif
                    @endauth
                @endif
            </nav>
        </div>
    </header>

    <main>
        <!-- Hero -->
        <section class="kurumi-hero">
            <div class="kurumi-container">
                <div class="kurumi-hero-content">
                    <span class="kurumi-label">
                        Learn • Practice • Grow
                    </span>

                    <h1>
                        Tingkatkan Skill,<br>
                        Wujudkan <span>Masa Depan.</span>
                    </h1>

                    <p>
                        Selamat datang di KursusKu, tempat untuk mempelajari
                        pemrograman, pengembangan web, dan keterampilan digital
                        melalui pengalaman belajar yang lebih terarah.
                    </p>

                    <div class="kurumi-actions">
                        <a href="#fitur"
                           class="kurumi-button kurumi-button-primary">
                            Jelajahi Kursus
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                               class="kurumi-button kurumi-button-outline">
                                Mulai Belajar
                            </a>
                        @else
                            <a href="#tentang"
                               class="kurumi-button kurumi-button-outline">
                                Tentang KursusKu
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </section>

        <!-- Informasi -->
        <section class="kurumi-strip" aria-label="Keunggulan KursusKu">
            <div class="kurumi-container kurumi-strip-inner">
                <div class="kurumi-stat">
                    <strong>Fleksibel</strong>
                    <span>Belajar sesuai kebutuhan</span>
                </div>

                <div class="kurumi-stat">
                    <strong>Praktis</strong>
                    <span>Fokus pada keterampilan</span>
                </div>

                <div class="kurumi-stat">
                    <strong>Berkembang</strong>
                    <span>Tingkatkan kemampuan digital</span>
                </div>
            </div>
        </section>

        <!-- Fitur -->
        <section class="kurumi-section" id="fitur">
            <div class="kurumi-container">
                <div class="kurumi-section-heading">
                    <small>Kenali KursusKu</small>
                    <h2>Mulai Perjalanan Belajarmu</h2>
                    <p>
                        Temukan fitur yang membantu kamu belajar dan
                        mengembangkan keterampilan digital.
                    </p>
                </div>

                <div class="kurumi-grid">
                    <article class="kurumi-card">
                        <div class="kurumi-card-icon" aria-hidden="true">
                            &lt;/&gt;
                        </div>

                        <h3>Belajar Pemrograman</h3>
                        <p>
                            Pelajari dasar pemrograman dan pengembangan
                            aplikasi web secara bertahap.
                        </p>

                        <a href="#tentang">Pelajari lebih lanjut &rarr;</a>
                    </article>

                    <article class="kurumi-card">
                        <div class="kurumi-card-icon" aria-hidden="true">
                            &#128218;
                        </div>

                        <h3>Materi Terarah</h3>
                        <p>
                            Kenali materi pembelajaran yang disusun untuk
                            membantu proses belajar lebih terstruktur.
                        </p>

                        <a href="#tentang">Kenali materi &rarr;</a>
                    </article>

                    <article class="kurumi-card">
                        <div class="kurumi-card-icon" aria-hidden="true">
                            &#127919;
                        </div>

                        <h3>Kembangkan Skill</h3>
                        <p>
                            Bangun pengetahuan dan keterampilan digital
                            untuk mendukung tujuan belajar kamu.
                        </p>

                        <a href="#tentang">Mulai berkembang &rarr;</a>
                    </article>
                </div>
            </div>
        </section>

        <!-- Tentang -->
        <section class="kurumi-container" id="tentang">
            <div class="kurumi-cta">
                <h2>Siap Memulai Langkah Berikutnya?</h2>

                <p>
                    Jadikan proses belajar sebagai langkah awal untuk
                    mengembangkan kemampuan dan meraih tujuanmu.
                </p>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                       class="kurumi-button kurumi-button-primary">
                        Daftar Sekarang
                    </a>
                @elseif (Route::has('login'))
                    <a href="{{ route('login') }}"
                       class="kurumi-button kurumi-button-primary">
                        Login untuk Memulai
                    </a>
                @else
                    <a href="#fitur"
                       class="kurumi-button kurumi-button-primary">
                        Jelajahi Fitur
                    </a>
                @endif
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="kurumi-footer">
        <div class="kurumi-container kurumi-footer-inner">
            <p>
                &copy; {{ date('Y') }} <strong>KursusKu</strong>.
                Belajar dan berkembang bersama.
            </p>

            <p>Powered by Laravel</p>
        </div>
    </footer>
</body>
</html>
