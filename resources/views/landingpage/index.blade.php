
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digitalisasi HSE | PT INKA</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --inka-red: #cf2918;
            --inka-dark-red: #68160d;
            --inka-text: #292929;
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 65px;
        }

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            color: var(--inka-text);
            overflow-x: hidden;
        }

        .landing-header {
            min-height: 100vh;
            min-height: 100svh;
            background:
                linear-gradient(rgba(15,22,30,.37), rgba(15,22,30,.45)),
                url("{{ asset('assets/images/kereta 2.jpg') }}")
                center / cover no-repeat;
            display: flex;
            flex-direction: column;
        }

        .navbar-inka {
            min-height: 46px;
            padding: 4px 0;
            background: rgba(255,255,255,.55);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            width: 100%;
            z-index: 1030;
            transition: background .3s ease, box-shadow .3s ease;
        }

        .navbar-inka.navbar-scrolled {
            background: rgba(255,255,255,.97);
            box-shadow: 0 3px 15px rgba(0,0,0,.12);
        }

        .logo-danantara {
            width: 100px;
            max-height: 32px;
            object-fit: contain;
        }

        .logo-inka {
            width: 75px;
            max-height: 30px;
            object-fit: contain;
        }

        .navbar-inka .navbar-nav .nav-link {
            color: white;
            font-size: 11px;
            font-weight: 500;
            padding: 6px 0;
            transition: color .2s ease;
        }

        .navbar-inka .navbar-nav .nav-link:hover {
            color: #ad1500;
        }

        .navbar-inka .navbar-nav .nav-link.active {
            color: white;
            border-bottom: 2px solid var(--inka-red);
        }

        .navbar-inka.navbar-scrolled .navbar-nav .nav-link {
            color: #252525;
        }

        .navbar-inka.navbar-scrolled .navbar-nav .nav-link:hover {
            color: var(--inka-red);
        }

        .navbar-inka.navbar-scrolled .navbar-nav .nav-link.active {
            color: #252525;
        }

        .navbar-toggler {
            padding: 3px 7px;
            border: 1px solid rgba(0,0,0,.25);
        }

        .navbar-toggler-icon {
            width: 19px;
            height: 19px;
        }

        .hero-section {
            flex: 1;
            min-height: 520px;
            display: flex;
            align-items: center;
            padding: 105px 0 75px;
            position: relative;
        }

        .hero-content {
            max-width: 850px;
            color: white;
        }

        .hero-line {
            width: 70px;
            height: 5px;
            background: var(--inka-red);
            margin-bottom: 22px;
        }

        .hero-title {
            font-size: clamp(30px,3.6vw,48px);
            font-weight: 700;
            line-height: 1.3;
        }

        .hero-title span {
            color: #e32b1d;
            white-space: nowrap;
        }

        .hero-description {
            max-width: 440px;
            margin-top: 18px;
            font-size: 13px;
            line-height: 1.9;
            color: #f3f3f3;
        }

        .btn-inka {
            border: none;
            border-radius: 7px;
            background: linear-gradient(90deg,#68160d,#cf2918);
            color: white;
            font-weight: 600;
            font-size: 13px;
            padding: 11px 24px;
        }

        .btn-inka:hover {
            background: linear-gradient(90deg,#7a1c11,#e32c1a);
            color: white;
        }

        .hero-slogan {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 13px;
            color: white;
            font-size: 11px;
        }

        .slogan-line {
            width: 45px;
            height: 3px;
            background: var(--inka-red);
            flex-shrink: 0;
        }

        .logo-k3-wrapper {
            position: absolute;
            top: 72px;
            right: 4%;
            z-index: 5;
        }

        .logo-k3 {
            display: block;
            width: 85px;
            height: 85px;
            object-fit: contain;
            filter: drop-shadow(0 2px 5px rgba(0,0,0,.15));
            animation: k3Float 5s ease-in-out infinite;
        }

        @keyframes k3Float {
            0%, 100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-5px);
            }
        }

        .about-section {
            background: #faf7f7;
            overflow: hidden;
        }

        .about-photo {
            position: relative;
            height: 100%;
            min-height: 560px;
            overflow: hidden;
        }

        .about-photo img {
            position: absolute;
            inset: 0;
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            transition: transform .8s ease;
        }

        .about-photo:hover img {
            transform: scale(1.035);
        }

        .about-content {
            min-height: 560px;
            padding: clamp(28px,4vw,55px);
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
            isolation: isolate;
            overflow: hidden;
        }

        .about-content::before {
            content: "";
            position: absolute;
            inset: 0;
            z-index: -1;
            pointer-events: none;
            background:
                radial-gradient(circle at 95% 10%,
                    rgba(180,30,20,.06) 0 100px,
                    transparent 101px),
                radial-gradient(circle at 85% 85%,
                    rgba(180,30,20,.05) 0 140px,
                    transparent 141px),
                radial-gradient(circle at 10% 95%,
                    rgba(180,30,20,.035) 0 85px,
                    transparent 86px);
            animation: aboutFloat 14s ease-in-out infinite alternate;
        }

        @keyframes aboutFloat {
            to {
                transform: translate(-12px,10px);
            }
        }

        .about-line {
            width: 55px;
            height: 5px;
            border-radius: 5px;
            background: #68160d;
        }

        .about-title {
            color: #ad1500;
            font-size: clamp(22px,2.1vw,30px);
            line-height: 1.4;
        }

        .about-description {
            color: #333;
            font-size: 13px;
            line-height: 1.8;
        }

        .about-card {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,.1);
            transition: transform .3s ease, box-shadow .3s ease;
        }

        .about-card .card-header {
            font-size: 12px;
        }

        .about-icon {
            width: 32px;
            height: 32px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 7px;
            background: #68160d;
            color: white;
            font-size: 17px;
            flex-shrink: 0;
        }

        .about-list {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 7px 0;
            color: #555;
            font-size: 11px;
        }

        .about-list i {
            color: #f04438;
            font-size: 16px;
            flex-shrink: 0;
        }

        .about-services {
            position: relative;
            background: linear-gradient(180deg,#faf7f7,#f5f6f8);
        }

        .about-label {
            color: #cf2918;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 1px;
        }

        .about-services-title {
            font-size: clamp(23px,3vw,34px);
        }

        .about-services-description {
            max-width: 630px;
            font-size: 13px;
            line-height: 1.8;
        }

        .service-card {
            border-radius: 13px;
            box-shadow: 0 3px 12px rgba(0,0,0,.05);
            transition: transform .3s ease, box-shadow .3s ease;
        }

        .service-card p {
            font-size: 12px;
            line-height: 1.8;
        }

        .service-icon {
            width: 58px;
            height: 58px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fff0ed;
            color: #cf2918;
            border-radius: 14px;
            font-size: 26px;
            transition: transform .3s ease;
        }

        .about-card:hover,
        .service-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 25px rgba(0,0,0,.13);
        }

        .service-card:hover .service-icon {
            transform: scale(1.12) rotate(-5deg);
        }

        .reveal-left,
        .reveal-right,
        .reveal-up {
            opacity: 0;
            transition: opacity .7s ease, transform .7s ease;
        }

        .reveal-left {
            transform: translateX(-35px);
        }

        .reveal-right {
            transform: translateX(35px);
        }

        .reveal-up {
            transform: translateY(30px);
        }

        .reveal-visible {
            opacity: 1;
            transform: translate(0,0);
        }

        .informasi-k3lh {
            background: #fff3f1;
        }

        .k3lh-header {
            background: white;
            overflow: hidden;
        }

        .k3lh-banner {
            width: 100%;
            min-height: 250px;
            height: 100%;
            position: relative;
            background-image: url("{{ asset('assets/images/kereta 3.png') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            clip-path: polygon(22% 0,100% 0,100% 100%,0 100%);
        }

        .k3lh-banner::before {
            content: "";
            position: absolute;
            top: 0;
            left: 12%;
            width: 7px;
            height: 120%;
            background: #cf2918;
            transform: skewX(-25deg);
        }

        .k3lh-promotion {
            background: #fff3f1;
        }

        .k3lh-see-all {
            background: none;
            border: none;
            color: #d32617;
            font-size: 12px;
            font-weight: 600;
            cursor: pointer;
            transition: transform .2s ease, color .2s ease;
        }

        .k3lh-see-all:hover {
            color: #89190d;
            transform: translateX(4px);
        }

        .k3lh-poster {
            position: relative;
            aspect-ratio: 3 / 4;
            border: none;
            border-radius: 9px;
            overflow: hidden;
            background: #e9e9e9;
            box-shadow: 0 4px 10px rgba(0,0,0,.15);
            cursor: pointer;
            width: 100%;
            padding: 0;
            display: block;
            text-align: left;
            transition: transform .35s ease, box-shadow .35s ease;
        }

        .k3lh-poster > img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .55s ease, filter .35s ease;
        }

        .k3lh-poster:hover {
            transform: translateY(-7px);
            box-shadow: 0 14px 25px rgba(0,0,0,.22);
        }

        .k3lh-poster:hover > img {
            transform: scale(1.055);
            filter: brightness(.94);
        }

        .k3lh-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 55px 13px 12px;
            background: linear-gradient(
                to bottom,
                transparent 0%,
                rgba(0,0,0,.45) 35%,
                rgba(0,0,0,.93) 100%
            );
            color: #fff;
            pointer-events: none;
            transition: padding .3s ease;
        }

        .k3lh-caption strong {
            display: block;
            font-size: 13px;
            font-weight: 700;
            line-height: 1.35;
        }

        .k3lh-date {
            display: block;
            font-size: 11px;
            font-weight: 500;
            margin-top: 3px;
            color: #fff;
        }

        .k3lh-readmore {
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-top: 1px solid rgba(255,255,255,.35);
            padding-top: 6px;
            margin-top: 8px;
            font-size: 10px;
            color: rgba(255,255,255,.9);
        }

        .k3lh-readmore i {
            transition: transform .3s ease;
        }

        .k3lh-poster:hover .k3lh-caption {
            padding-bottom: 18px;
        }

        .k3lh-poster:hover .k3lh-readmore i {
            transform: translateX(4px);
        }

        .k3lh-poster:focus-visible,
        .k3lh-see-all:focus-visible {
            outline: 3px solid #cf2918;
            outline-offset: 3px;
        }

        .k3lh-carousel .carousel-indicators {
            position: static;
            margin: 18px 0 0;
        }

        .k3lh-carousel .carousel-indicators button {
            width: 10px;
            height: 10px;
            border: none;
            border-radius: 50%;
            background: #999;
            opacity: .6;
            margin: 0 4px;
        }

        .k3lh-carousel .carousel-indicators button.active {
            background: #b30d0d;
            opacity: 1;
        }

        .k3lh-modal {
            border: none;
            border-radius: 13px;
            background: #fff;
            box-shadow: 0 20px 65px rgba(0,0,0,.2);
            overflow: hidden;
        }

        .k3lh-modal-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px 20px 5px;
        }

        .k3lh-back {
            border: none;
            background: transparent;
            color: #111;
            font-size: 17px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 4px 0;
        }

        .k3lh-back i {
            font-size: 22px;
        }

        .k3lh-back:hover {
            color: var(--inka-red);
        }

        .k3lh-download {
            border: none;
            background: transparent;
            color: #111;
            font-size: 23px;
            text-decoration: none;
            padding: 4px 8px;
        }

        .k3lh-download:hover {
            color: var(--inka-red);
        }

        .k3lh-preview-body {
            padding: 0 20px 24px;
            text-align: center;
        }

        .k3lh-preview-body img {
            display: block;
            width: auto;
            max-width: 100%;
            max-height: min(70vh,650px);
            object-fit: contain;
            margin: 0 auto;
            box-shadow: 0 3px 9px rgba(0,0,0,.15);
        }

        .k3lh-gallery-body {
            max-height: 72vh;
            overflow-y: auto;
            padding: 12px 20px 25px;
        }

        .k3lh-gallery-item {
            width: 100%;
            padding: 0;
            border: 0;
            border-radius: 9px;
            overflow: hidden;
            background: #f3f3f3;
            box-shadow: 0 3px 10px rgba(0,0,0,.1);
            transition: transform .25s ease;
        }

        .k3lh-gallery-item:hover {
            transform: translateY(-4px);
        }

        .k3lh-gallery-item img {
            width: 100%;
            aspect-ratio: 3 / 4;
            object-fit: cover;
            display: block;
        }

        .k3lh-gallery-item span {
            display: block;
            font-size: 11px;
            padding: 9px;
            text-align: left;
        }

        .modal-backdrop.show {
            opacity: 1;
            background: rgba(30,30,30,.35);
            backdrop-filter: blur(9px);
            -webkit-backdrop-filter: blur(9px);
        }

        .portal-section {
            padding: 100px 0 90px;
            background: linear-gradient(
                135deg,rgba(100,18,12,.9),rgba(188,38,23,.9)
            ), url("{{ asset('assets/images/kereta 2.jpg') }}")
               center / cover no-repeat;
            color: white;
        }

        .portal-content h2 {
            font-size: clamp(24px,3vw,36px);
            font-weight: 700;
        }

        .portal-content p {
            max-width: 620px;
            margin: 18px auto 25px;
            font-size: 13px;
            line-height: 1.9;
        }

        .btn-portal-white {
            background: white;
            border: none;
            color: #68160d;
            font-weight: 600;
            font-size: 13px;
            padding: 12px 26px;
            border-radius: 8px;
        }

        .footer-red {
            background: #65180e;
            height: 20px;
        }

        .footer-copyright {
            background: white;
            color: #999;
            font-size: 10px;
            text-align: center;
            padding: 7px 10px;
        }

        .login-modal {
            border: none;
            border-radius: 12px;
            box-shadow: 0 15px 50px rgba(0,0,0,.15);
        }

        .login-modal-content {
            padding: 24px 55px 30px;
        }

        .login-title {
            text-align: center;
            font-size: 18px;
            font-weight: 600;
            margin: 12px 0 26px;
        }

        .login-form {
            max-width: 340px;
            margin: auto;
        }

        .login-form .form-label {
            font-size: 12px;
            font-weight: 500;
        }

        .login-form .form-control {
            height: 35px;
            border-radius: 30px;
            font-size: 11px;
        }

        .login-submit {
            width: 100%;
            height: 42px;
            margin-top: 12px;
        }

        .modal-close {
            position: absolute;
            top: 13px;
            right: 18px;
            background: transparent;
            border: none;
            font-size: 25px;
            z-index: 2;
        }

        @media (max-width: 991.98px) {
            .navbar-collapse {
                order: 4;
                flex-basis: 100%;
                background: rgba(255,255,255,.9);
                padding: 10px;
                border-radius: 6px;
            }

            .navbar-inka .navbar-collapse .nav-link {
                color: #252525;
                padding: 9px 12px;
            }

            .navbar-inka .navbar-collapse .nav-link.active {
                color: #252525;
                border-bottom: none;
                border-left: 3px solid var(--inka-red);
            }

            .about-photo {
                min-height: 0;
                height: 380px;
            }

            .about-content {
                min-height: 0;
                padding: 40px 28px;
            }

            .k3lh-banner {
                min-height: 180px;
            }

            .logo-k3-wrapper {
                right: 5%;
            }
        }

        @media (max-width: 767.98px) {
            .hero-title {
                font-size: 29px;
            }

            .hero-title span {
                white-space: normal;
            }

            .hero-section {
                min-height: 540px;
                padding: 100px 0 70px;
            }

            .hero-description {
                font-size: 12px;
            }

            .about-photo {
                height: 280px;
            }

            .about-content {
                padding: 30px 20px;
            }

            .about-title {
                font-size: 22px;
            }

            .about-description {
                font-size: 12px;
            }

            .k3lh-banner {
                display: none;
            }

            .login-modal-content {
                padding: 35px 22px 28px;
            }

            .logo-k3-wrapper {
                top: 68px;
                right: 18px;
            }

            .logo-k3 {
                width: 40px;
                height: 40px;
            }

            .k3lh-caption strong {
                font-size: 12px;
            }

            .k3lh-modal-header {
                padding: 12px 15px 5px;
            }

            .k3lh-preview-body {
                padding: 0 12px 20px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .reveal-left,
            .reveal-right,
            .reveal-up {
                opacity: 1;
                transform: none;
                transition: none;
            }

            .about-content::before,
            .logo-k3 {
                animation: none;
            }

            .about-photo img,
            .about-card,
            .service-card,
            .service-icon,
            .k3lh-poster,
            .k3lh-poster img,
            .k3lh-caption,
            .k3lh-readmore i {
                transition: none;
            }

            html {
                scroll-behavior: auto;
            }
        }
    </style>
</head>

<body>

@php
    $posters = [
        [
            'image' => asset('assets/images/Langit Senja.png'),
            'title' => 'Waspada Bahaya Kebakaran',
            'category' => 'Informasi Keselamatan Kerja',
            'date' => '30 September 2026'
        ],
        [
            'image' => asset('assets/images/Stop TBC.png'),
            'title' => 'Stop TBC di Tempat Kerja',
            'category' => 'Informasi Kesehatan Kerja',
            'date' => '30 September 2026'
        ],
        [
            'image' => asset('assets/images/PHBS.png'),
            'title' => 'Penerapan (PHBS) di Tempat Kerja',
            'category' => 'Informasi Kesehatan Kerja',
            'date' => '30 September 2026'
        ],
        [
            'image' => asset('assets/images/Langit Senja 2.png'),
            'title' => 'Larangan & Peringatan Keselamatan Kerja',
            'category' => 'Informasi K3LH',
            'date' => '30 September 2026'
        ],
        [
            'image' => asset('assets/images/Langit Senja.png'),
            'title' => 'Informasi HSE',
            'category' => 'Keselamatan Kerja',
            'date' => '30 September 2026'
        ],
        [
            'image' => asset('assets/images/Langit Senja 2.png'),
            'title' => 'Informasi Kesehatan',
            'category' => 'Kesehatan Kerja',
            'date' => '30 September 2026'
        ],
        [
            'image' => asset('assets/images/PHBS.png'),
            'title' => 'Informasi Lingkungan',
            'category' => 'Lingkungan Kerja',
            'date' => '30 September 2026'
        ],
        [
            'image' => asset('assets/images/Stop TBC.png'),
            'title' => 'Pengumuman HSE',
            'category' => 'Informasi K3LH',
            'date' => '30 September 2026'
        ]
    ];
@endphp

<div class="landing-header">

    <nav class="navbar navbar-expand-lg navbar-inka" id="mainNavbar">
        <div class="container-fluid px-3 px-lg-4">

            <a class="navbar-brand m-0" href="#beranda">
                <img
                    src="{{ asset('assets/images/Danantara Logo.png') }}"
                    alt="Danantara Indonesia"
                    class="logo-danantara">
            </a>

            <div class="collapse navbar-collapse" id="navbarMenu">

                <ul class="navbar-nav mx-auto gap-lg-5 align-items-lg-center">

                    <li class="nav-item">
                        <a class="nav-link active" href="#beranda">
                            Beranda
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">
                            Tentang
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#informasi">
                            Informasi K3LH
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#layanan">
                            Layanan Permit
                        </a>
                    </li>

                </ul>
            </div>

            <img
                src="{{ asset('assets/images/logo.png') }}"
                alt="PT INKA"
                class="logo-inka ms-auto ms-lg-0">

            <button
                class="navbar-toggler ms-3"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu"
                aria-controls="navbarMenu"
                aria-expanded="false"
                aria-label="Buka menu">

                <span class="navbar-toggler-icon"></span>
            </button>

        </div>
    </nav>

    <div class="logo-k3-wrapper">
        <img
            src="{{ asset('assets/images/LOGO K3.png') }}"
            alt="Logo K3"
            class="logo-k3">
    </div>

    <section class="hero-section" id="beranda">
        <div class="container">
            <div class="hero-content">

                <div class="hero-line"></div>

                <h1 class="hero-title">
                    Selamat Datang di
                    <br>
                    <span>HSE Portal Digitalisasi</span>
                </h1>

                <p class="hero-description">
                    Satu portal terintegrasi untuk mengelola dan memantau
                    seluruh kegiatan Health, Safety & Environment (HSE)
                    secara terpusat. Hadir dengan berbagai fitur untuk
                    mendukung monitoring patroli K3LH & 5R, inspeksi P3K
                    dan APAR, pengelolaan temuan, perizinan kerja, hingga
                    pelaporan dan pemantauan kegiatan HSE.
                </p>

                <button
                    type="button"
                    class="btn btn-inka mt-3"
                    data-bs-toggle="modal"
                    data-bs-target="#loginModal">

                    Masuk ke Portal
                    <i class="bi bi-arrow-right ms-2"></i>

                </button>

                <div class="hero-slogan">
                    <span class="slogan-line"></span>
                    <span>
                        Keselamatan Hari Ini, Keberlanjutan Masa Depan
                    </span>
                </div>

            </div>
        </div>
    </section>

</div>

<section class="about-section" id="tentang">

    <div class="container-fluid p-0">
        <div class="row g-0 align-items-stretch">

            <div class="col-lg-6">
                <div class="about-photo reveal-left">
                    <img
                        src="{{ asset('assets/images/foto HSE.png') }}"
                        alt="Kegiatan HSE PT INKA">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-content reveal-right">

                    <div class="about-line mb-3"></div>

                    <h2 class="about-title fw-bold mb-3">
                        Mengenal HSE
                        <br>
                        PT Inka Pabrik Banyuwangi
                    </h2>

                    <p class="about-description mb-4">
                        Health, Safety & Environment (HSE)
                        berkomitmen menciptakan lingkungan kerja yang
                        aman, sehat, tertib, dan berkelanjutan dengan
                        menerapkan keselamatan dan kesehatan kerja,
                        pengelolaan lingkungan, serta membudayakan
                        lingkungan kerja yang Ringkas, Rapi, Resik,
                        Rawat, dan Rajin di lingkungan
                        PT Industri Kereta Api (Persero).
                    </p>

                    <div class="row g-3">

                        <div class="col-12 col-sm-6">
                            <div class="card about-card h-100 border-0">

                                <div class="card-header bg-white d-flex align-items-center gap-2 py-3">
                                    <span class="about-icon">
                                        <i class="bi bi-bullseye"></i>
                                    </span>
                                    <span class="fw-semibold small">
                                        Fokus HSE
                                    </span>
                                </div>

                                <div class="card-body">

                                    <div class="about-list">
                                        <i class="bi bi-shield-check"></i>
                                        <span>Keselamatan Kerja</span>
                                    </div>

                                    <div class="about-list">
                                        <i class="bi bi-heart-pulse"></i>
                                        <span>Kesehatan Kerja</span>
                                    </div>

                                    <div class="about-list">
                                        <i class="bi bi-tree"></i>
                                        <span>Lingkungan</span>
                                    </div>

                                    <div class="about-list">
                                        <i class="bi bi-clipboard-check"></i>
                                        <span>Kepatuhan & Monitoring</span>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">
                            <div class="card about-card h-100 border-0">

                                <div class="card-header bg-white d-flex align-items-center gap-2 py-3">
                                    <span class="about-icon">
                                        <i class="bi bi-gear"></i>
                                    </span>
                                    <span class="fw-semibold small">
                                        Aktivitas HSE
                                    </span>
                                </div>

                                <div class="card-body">

                                    <div class="about-list">
                                        <i class="bi bi-person-walking"></i>
                                        <span>Patroli K3LH & 5R</span>
                                    </div>

                                    <div class="about-list">
                                        <i class="bi bi-clipboard-data"></i>
                                        <span>Inspeksi</span>
                                    </div>

                                    <div class="about-list">
                                        <i class="bi bi-file-earmark-check"></i>
                                        <span>Pengelolaan Temuan</span>
                                    </div>

                                    <div class="about-list">
                                        <i class="bi bi-file-earmark-text"></i>
                                        <span>Pengelolaan Izin Kerja</span>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="about-services py-5" id="layanan">
        <div class="container">

            <div class="text-center mb-4 reveal-up">

                <h2 class="fw-bold mt-2 mb-3 about-services-title">
                    Layanan Digitalisasi HSE
                </h2>

                <p class="text-secondary mx-auto about-services-description">
                    Berbagai layanan untuk mendukung kebutuhan
                    informasi dan kegiatan Health, Safety,
                    and Environment.
                </p>

            </div>

            <div class="row g-3 g-lg-4">

                <div class="col-12 col-sm-6 col-lg-3 reveal-up">
                    <div class="card service-card h-100 border-0 text-center">
                        <div class="card-body p-4">

                            <div class="service-icon mx-auto mb-3">
                                <i class="bi bi-clipboard-check"></i>
                            </div>

                            <h3 class="fw-semibold fs-6 mb-3">
                                Patroli dan Inspeksi
                            </h3>

                            <p class="small text-secondary mb-0">
                                Informasi mengenai kegiatan pemeriksaan
                                dan pemantauan kondisi lingkungan kerja.
                            </p>

                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3 reveal-up">
                    <div class="card service-card h-100 border-0 text-center">
                        <div class="card-body p-4">

                            <div class="service-icon mx-auto mb-3">
                                <i class="bi bi-calendar-event"></i>
                            </div>

                            <h3 class="fw-semibold fs-6 mb-3">
                                Agenda HSE
                            </h3>

                            <p class="small text-secondary mb-0">
                                Informasi kegiatan dan agenda keselamatan,
                                kesehatan kerja, serta lingkungan.
                            </p>

                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3 reveal-up">
                    <div class="card service-card h-100 border-0 text-center">
                        <div class="card-body p-4">

                            <div class="service-icon mx-auto mb-3">
                                <i class="bi bi-shield-check"></i>
                            </div>

                            <h3 class="fw-semibold fs-6 mb-3">
                                Fasilitas Darurat
                            </h3>

                            <p class="small text-secondary mb-0">
                                Informasi dan pemantauan fasilitas
                                pendukung keadaan darurat di lingkungan kerja.
                            </p>

                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3 reveal-up">
                    <div class="card service-card h-100 border-0 text-center">
                        <div class="card-body p-4">

                            <div class="service-icon mx-auto mb-3">
                                <i class="bi bi-file-earmark-text"></i>
                            </div>

                            <h3 class="fw-semibold fs-6 mb-3">
                                Layanan Permit
                            </h3>

                            <p class="small text-secondary mb-0">
                                Akses informasi mengenai layanan perizinan
                                dan kebutuhan administrasi terkait HSE.
                            </p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>

<section class="informasi-k3lh" id="informasi">

    <div class="k3lh-header">
        <div class="container-fluid">
            <div class="row g-0 align-items-stretch">

                <div class="col-lg-7 d-flex align-items-center">
                    <div class="d-flex gap-3 p-4 p-lg-5">

                        <div class="bg-danger text-white rounded-3 p-3 align-self-start">
                            <i class="bi bi-megaphone-fill fs-4"></i>
                        </div>

                        <div>
                            <span class="text-danger fw-semibold"
                                  style="font-size:10px">
                                DASHBOARD INFORMASI HSE
                            </span>

                            <h2 class="fw-bold lh-sm mt-2"
                                style="font-size:clamp(23px,2.5vw,34px)">
                                Dapatkan Lebih Banyak
                                <br>
                                <span class="text-danger">Informasi</span>
                            </h2>

                            <p class="text-secondary mb-3"
                               style="font-size:12px;max-width:520px">
                                Pusat informasi keselamatan, kesehatan kerja,
                                dan lingkungan terkini untuk seluruh karyawan.
                                <br>
                                Rujuk Satu | Langit Senja | Lainnya
                            </p>

                            <div class="bg-danger rounded-pill"
                                 style="width:140px;height:4px"></div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="k3lh-banner h-100"></div>
                </div>

            </div>
        </div>
    </div>

    <div class="k3lh-promotion">

        <div class="container-fluid px-4 py-4">

            <div class="d-flex justify-content-between align-items-center mb-3">

                <div class="border-start border-4 border-danger ps-2">

                    <h3 class="fw-bold mb-0" style="font-size:15px">
                        Promosi K3 & Pengumuman
                    </h3>

                    <small class="text-secondary">
                        Informasi Penting dan Terkini
                    </small>

                </div>

                <button
                    type="button"
                    class="k3lh-see-all"
                    id="lihatSemuaPoster">

                    Lihat Semua
                    <i class="bi bi-chevron-right"></i>

                </button>

            </div>

            <div
                id="k3lhCarousel"
                class="carousel slide k3lh-carousel"
                data-bs-touch="true"
                data-bs-interval="false">

                <div class="carousel-inner">

                    @foreach(array_chunk($posters, 4) as $groupIndex => $group)

                        <div class="carousel-item {{ $groupIndex === 0 ? 'active' : '' }}">

                            <div class="row g-3">

                                @foreach($group as $index => $poster)

                                    @php
                                        $posterIndex = ($groupIndex * 4) + $index;

                                        $responsiveClass = $index === 0
                                            ? 'col-12 col-sm-6 col-lg-3'
                                            : ($index === 1
                                                ? 'd-none d-sm-block col-sm-6 col-lg-3'
                                                : 'd-none d-lg-block col-lg-3');
                                    @endphp

                                    <div class="{{ $responsiveClass }}">

                                        <button
                                            type="button"
                                            class="k3lh-poster"
                                            data-poster-index="{{ $posterIndex }}"
                                            aria-label="Lihat poster {{ $poster['title'] }}">

                                            <img
                                                src="{{ $poster['image'] }}"
                                                alt="{{ $poster['title'] }}"
                                                loading="lazy">

                                            <div class="k3lh-caption">

                                                <strong>
                                                    {{ $poster['title'] }}
                                                </strong>

                                                <span class="k3lh-date">
                                                    {{ $poster['date'] }}
                                                </span>

                                                <span class="k3lh-readmore">
                                                    Lihat Lebih Dalam
                                                    <i class="bi bi-arrow-right"></i>
                                                </span>

                                            </div>

                                        </button>

                                    </div>

                                @endforeach

                            </div>
                        </div>

                    @endforeach

                </div>

                <div class="carousel-indicators">

                    @foreach(array_chunk($posters, 4) as $groupIndex => $group)

                        <button
                            type="button"
                            data-bs-target="#k3lhCarousel"
                            data-bs-slide-to="{{ $groupIndex }}"
                            class="{{ $groupIndex === 0 ? 'active' : '' }}"
                            aria-label="Halaman poster {{ $groupIndex + 1 }}"
                            @if($groupIndex === 0) aria-current="true" @endif>
                        </button>

                    @endforeach

                </div>

            </div>
        </div>
    </div>

</section>

<section class="portal-section" id="portal">
    <div class="container">
        <div class="text-center portal-content">

            <h2>
                Digitalisasi HSE
                <br>
                PT Industri Kereta Api (Persero)
            </h2>

            <p>
                Mendukung pengelolaan informasi dan pelaksanaan
                kegiatan HSE melalui satu portal yang terintegrasi.
            </p>

            <button
                type="button"
                class="btn btn-portal-white"
                data-bs-toggle="modal"
                data-bs-target="#loginModal">

                <i class="bi bi-box-arrow-in-right me-2"></i>
                Masuk ke Portal

            </button>

        </div>
    </div>
</section>

<footer>
    <div class="footer-red"></div>
    <div class="footer-copyright">
        © 2026 | PT Industri Kereta Api (Persero)
    </div>
</footer>

<div
    class="modal fade"
    id="posterModal"
    tabindex="-1"
    aria-labelledby="posterModalTitle"
    aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-lg">

        <div class="modal-content k3lh-modal">

            <div class="k3lh-modal-header">

                <button
                    type="button"
                    class="k3lh-back"
                    id="posterBackButton">

                    <i class="bi bi-chevron-left"></i>
                    <span id="posterBackText">Kembali</span>

                </button>

                <a
                    href="#"
                    id="posterDownload"
                    class="k3lh-download"
                    aria-label="Download poster"
                    download>

                    <i class="bi bi-download"></i>

                </a>

            </div>

            <div id="posterDetailView">

                <div class="k3lh-preview-body">

                    <img
                        id="posterPreviewImage"
                        src=""
                        alt="Preview poster">

                    <h3
                        id="posterModalTitle"
                        class="fw-semibold mt-3 mb-1"
                        style="font-size:14px">
                    </h3>

                    <p
                        id="posterPreviewCategory"
                        class="text-secondary mb-0"
                        style="font-size:11px">
                    </p>

                    <p
                        id="posterPreviewDate"
                        class="text-secondary mt-1 mb-0"
                        style="font-size:10px">
                    </p>

                </div>

            </div>

            <div id="posterGalleryView" class="d-none">

                <div class="k3lh-gallery-body">

                    <h3 class="fw-semibold mb-3" style="font-size:16px">
                        Semua Informasi K3LH
                    </h3>

                    <div class="row g-3">

                        @foreach($posters as $index => $poster)

                            <div class="col-6 col-md-4 col-lg-3">

                                <button
                                    type="button"
                                    class="k3lh-gallery-item"
                                    data-poster-index="{{ $index }}">

                                    <img
                                        src="{{ $poster['image'] }}"
                                        alt="{{ $poster['title'] }}"
                                        loading="lazy">

                                    <span>
                                        {{ $poster['title'] }}
                                        <small class="d-block text-secondary mt-1">
                                            {{ $poster['date'] }}
                                        </small>
                                    </span>

                                </button>

                            </div>

                        @endforeach

                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<div
    class="modal fade"
    id="loginModal"
    tabindex="-1"
    aria-labelledby="loginTitle"
    aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content login-modal position-relative">

            <button
                type="button"
                class="modal-close"
                data-bs-dismiss="modal"
                aria-label="Tutup">

                <i class="bi bi-x-lg"></i>

            </button>

            <div class="login-modal-content">

                <h2 class="login-title" id="loginTitle">
                    Selamat Datang
                </h2>

                <form class="login-form" id="loginForm">
                    @csrf

                    <div class="mb-3">

                        <label for="username" class="form-label">
                            Username
                        </label>

                        <input
                            type="text"
                            id="username"
                            name="username"
                            class="form-control"
                            placeholder="Masukkan username anda"
                            autocomplete="username"
                            required>

                    </div>

                    <div class="mb-3">

                        <label for="password" class="form-label">
                            Password
                        </label>

                        <input
                            type="password"
                            id="password"
                            name="password"
                            class="form-control"
                            placeholder="Masukkan password anda"
                            autocomplete="current-password"
                            required>

                    </div>

                    <button
                        type="submit"
                        class="btn btn-inka login-submit">

                        <i class="bi bi-box-arrow-in-right me-1"></i>
                        Masuk

                    </button>

                </form>

            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {

        const navbar = document.getElementById('mainNavbar');
        const navbarLinks = document.querySelectorAll('#navbarMenu .nav-link');
        const navbarMenu = document.getElementById('navbarMenu');

        function updateNavbar() {
            navbar.classList.toggle('navbar-scrolled', window.scrollY > 30);
        }

        window.addEventListener('scroll', updateNavbar, { passive: true });
        updateNavbar();

        navbarLinks.forEach(function (link) {
            link.addEventListener('click', function () {

                navbarLinks.forEach(function (item) {
                    item.classList.remove('active');
                });

                link.classList.add('active');

                if (navbarMenu.classList.contains('show')) {
                    bootstrap.Collapse.getOrCreateInstance(
                        navbarMenu,
                        { toggle: false }
                    ).hide();
                }
            });
        });

        const revealElements = document.querySelectorAll(
            '.reveal-left, .reveal-right, .reveal-up'
        );

        const reduceMotion = window.matchMedia(
            '(prefers-reduced-motion: reduce)'
        ).matches;

        if (reduceMotion || !('IntersectionObserver' in window)) {
            revealElements.forEach(function (element) {
                element.classList.add('reveal-visible');
            });
        } else {
            const revealObserver = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('reveal-visible');
                        revealObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.08 });

            revealElements.forEach(function (element) {
                revealObserver.observe(element);
            });
        }

        const posters = @json($posters);

        const posterModalElement = document.getElementById('posterModal');
        const posterModal = new bootstrap.Modal(posterModalElement);

        const posterDetailView = document.getElementById('posterDetailView');
        const posterGalleryView = document.getElementById('posterGalleryView');
        const posterPreviewImage = document.getElementById('posterPreviewImage');
        const posterModalTitle = document.getElementById('posterModalTitle');
        const posterPreviewCategory = document.getElementById('posterPreviewCategory');
        const posterPreviewDate = document.getElementById('posterPreviewDate');
        const posterDownload = document.getElementById('posterDownload');
        const posterBackButton = document.getElementById('posterBackButton');
        const posterBackText = document.getElementById('posterBackText');

        let openedFromGallery = false;

        function showPoster(index, fromGallery = false) {
            const poster = posters[index];

            if (!poster) return;

            openedFromGallery = fromGallery;

            posterDetailView.classList.remove('d-none');
            posterGalleryView.classList.add('d-none');

            posterPreviewImage.src = poster.image;
            posterPreviewImage.alt = poster.title;

            posterModalTitle.textContent = poster.title;
            posterPreviewCategory.textContent = poster.category;
            posterPreviewDate.textContent = poster.date;

            posterDownload.href = poster.image;

            const extension = poster.image.split('.').pop().split('?')[0] || 'png';

            posterDownload.setAttribute(
                'download',
                'Poster-HSE-' + (index + 1) + '.' + extension
            );

            posterBackText.textContent = 'Kembali';
            posterDownload.classList.remove('d-none');

            if (!fromGallery) {
                posterModal.show();
            }
        }

        function showGallery() {
            posterDetailView.classList.add('d-none');
            posterGalleryView.classList.remove('d-none');

            posterDownload.classList.add('d-none');
            posterBackText.textContent = 'Kembali';

            posterModal.show();
        }

        document.querySelectorAll('.k3lh-poster').forEach(function (button) {
            button.addEventListener('click', function () {
                showPoster(Number(this.dataset.posterIndex), false);
            });
        });

        document.getElementById('lihatSemuaPoster')
            .addEventListener('click', function () {
                showGallery();
            });

        document.querySelectorAll('.k3lh-gallery-item').forEach(function (button) {
            button.addEventListener('click', function () {
                showPoster(Number(this.dataset.posterIndex), true);
            });
        });

        posterBackButton.addEventListener('click', function () {
            if (
                openedFromGallery &&
                !posterDetailView.classList.contains('d-none')
            ) {
                showGallery();
            } else {
                posterModal.hide();
            }
        });

        posterModalElement.addEventListener('hidden.bs.modal', function () {
            posterPreviewImage.removeAttribute('src');
            openedFromGallery = false;
        });

        document.getElementById('loginForm')
            .addEventListener('submit', function (event) {
                event.preventDefault();
            });

    });
</script>

</body>
</html>
