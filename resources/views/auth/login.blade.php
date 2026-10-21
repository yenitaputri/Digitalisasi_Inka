
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | Digitalisasi HSE INKA</title>

    <!-- BOOTSTRAP 5 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- BOOTSTRAP ICONS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        rel="stylesheet">

    <!-- FONT -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        :root {
            --inka-red: #cf2918;
            --inka-dark-red: #68160d;
        }

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }

        /* BACKGROUND */
        .landing-page {
            min-height: 100vh;
            display: flex;
            flex-direction: column;

            background-image: url("{{ asset('assets/images/kereta 2.jpg') }}");

            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        /* NAVBAR */
        .navbar-inka {
            background: rgba(255, 255, 255, 0.78);
            min-height: 42px;
            padding: 2px 0;
        }

        /* Logo Danantara */
        .logo-danantara {
            width: 100px;
            max-height: 32px;
            object-fit: contain;
        }

        /* Logo INKA */
        .logo-inka {
            width: 75px;
            max-height: 30px;
            object-fit: contain;
        }

        /* Menu Navbar */
        .navbar-nav .nav-link {
            color: #252525;
            font-size: 11px;
            font-weight: 500;
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .navbar-nav .nav-link.active {
            color: #222;
            border-bottom: 2px solid #cf2918;
        }

        /* Responsive Navbar */
        @media (max-width: 991.98px) {
            .navbar-inka {
                min-height: 42px;
                padding: 3px 0;
            }

            .logo-danantara {
                width: 90px;
                max-height: 30px;
            }

            .logo-inka {
                width: 65px;
                max-height: 28px;
            }
        }

        /* HERO */
        .hero-section {
            flex: 1;
            min-height: 0;
            display: flex;
            align-items: center;
            padding: 50px 7%;
        }

        .hero-content {
            max-width: 520px;
            color: #fff;
        }

        .hero-line {
            width: 70px;
            height: 5px;
            background: var(--inka-red);
            margin-bottom: 20px;
        }

        .hero-title {
            font-size: clamp(28px, 3.4vw, 46px);
            font-weight: 700;
            line-height: 1.3;
        }

        .hero-title span {
            color: #e33324;
        }

        .hero-description {
            max-width: 420px;
            margin-top: 15px;
            line-height: 1.8;
            font-size: 14px;
        }

        .btn-inka {
            background: linear-gradient(
                90deg,
                var(--inka-dark-red),
                var(--inka-red)
            );
            color: #fff;
            border: none;
            font-weight: 600;
        }

        .btn-inka:hover {
            background: linear-gradient(
                90deg,
                #7f1c12,
                #e0321e
            );
            color: #fff;
        }

        /* MODAL LOGIN */
        .modal-backdrop.show {
            opacity: 0.48;
        }

        .modal-content {
            border: none;
            border-radius: 12px;
            box-shadow: 0 12px 40px rgba(0,0,0,.12);
        }

        .login-modal-content {
            padding: 22px 55px 30px;
        }

        .login-title {
            font-size: 18px;
            font-weight: 600;
            color: #111;
            text-align: center;
            margin: 12px 0 26px;
        }

        .login-form {
            max-width: 340px;
            margin: auto;
        }

        .login-form .form-label {
            font-size: 12px;
            font-weight: 500;
            margin-bottom: 5px;
        }

        .login-form .form-control {
            border-radius: 30px;
            border: 1px solid #dedede;
            height: 35px;
            padding: 8px 15px;
            font-size: 11px;
        }

        .login-form .form-control:focus {
            border-color: var(--inka-red);
            box-shadow: 0 0 0 2px rgba(207,41,24,.1);
        }

        .login-submit {
            height: 42px;
            font-size: 14px;
            border-radius: 10px;
            margin-top: 10px;
            box-shadow: 0 3px 3px rgba(0,0,0,.14);
        }

        .modal-close {
            position: absolute;
            right: 18px;
            top: 13px;
            font-size: 25px;
            color: #111;
            background: none;
            border: none;
            line-height: 1;
        }

        /* ==========================
           FOOTER
        ========================== */
        .footer-inka {
            width: 100%;
            margin-top: auto;
        }

        .footer-red {
            width: 100%;
            height: 20px;
            background-color: #65180e;
        }

        .footer-copyright {
            background-color: #ffffff;
            color: #999999;
            font-size: 10px;
            font-weight: 400;
            text-align: center;
            padding: 4px 10px;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .hero-section {
                padding: 60px 25px;
            }

            .navbar-inka {
                padding: 3px 0;
            }

            .logo-danantara {
                width: 90px;
            }

            .logo-inka {
                width: 65px;
            }

            .login-modal-content {
                padding: 30px 22px;
            }

            .login-title {
                margin-top: 15px;
            }

            .footer-red {
                height: 16px;
            }

            .footer-copyright {
                font-size: 9px;
            }
        }
    </style>
</head>

<body>

<div class="landing-page">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-inka">
        <div class="container-fluid px-4">

            <!-- LOGO DANANTARA -->
            <a class="navbar-brand" href="#">
                <img
                    src="{{ asset('assets/images/Danantara Logo.png') }}"
                    alt="Danantara Indonesia"
                    class="logo-danantara">
            </a>

            <!-- HAMBURGER MENU -->
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu"
                aria-controls="navbarMenu"
                aria-expanded="false"
                aria-label="Buka navigasi">

                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- MENU -->
            <div class="collapse navbar-collapse" id="navbarMenu">

                <ul class="navbar-nav mx-auto gap-lg-4">

                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            Beranda
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Tentang
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Informasi K3LH
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Layanan Permit
                        </a>
                    </li>

                </ul>
            </div>

            <!-- LOGO PT INKA -->
            <img
                src="{{ asset('assets/images/logo.png') }}"
                alt="PT INKA"
                class="logo-inka">

        </div>
    </nav>

    <!-- HALAMAN UTAMA -->
    <main class="hero-section">
        <div class="hero-content">

            <div class="hero-line"></div>

            <h1 class="hero-title">
                Selamat Datang di
                <br>
                <span>HSE Portal</span>
            </h1>

            <p class="hero-description">
                Satu portal terintegrasi untuk mendukung
                kegiatan Health, Safety, and Environment
                dengan berbagai fitur monitoring,
                inspeksi 5R, inspeksi P3K,
                hingga pelaporan.
            </p>

            <button
                class="btn btn-inka px-4 py-2 mt-3"
                type="button"
                data-bs-toggle="modal"
                data-bs-target="#loginModal">

                Masuk ke Portal
            </button>

        </div>
    </main>

    <!-- ==========================
         FOOTER
    ========================== -->
    <footer class="footer-inka">

        <!-- GARIS MERAH TUA -->
        <div class="footer-red"></div>

        <!-- COPYRIGHT -->
        <div class="footer-copyright">
            © 2026 | PT Industri Kereta Api (Persero)
        </div>

    </footer>

</div>

<!-- MODAL LOGIN -->
<div
    class="modal fade"
    id="loginModal"
    tabindex="-1"
    aria-labelledby="loginTitle"
    aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content position-relative">

            <!-- TOMBOL CLOSE -->
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

                    <!-- USERNAME -->
                    <div class="mb-3">

                        <label
                            for="username"
                            class="form-label">
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

                    <!-- PASSWORD -->
                    <div class="mb-3">

                        <label
                            for="password"
                            class="form-label">
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

                    <!-- TOMBOL MASUK -->
                    <button
                        type="submit"
                        class="btn btn-inka login-submit w-100">

                        <i class="bi bi-box-arrow-in-right me-1"></i>
                        Masuk

                    </button>

                </form>

            </div>
        </div>
    </div>
</div>

<!-- BOOTSTRAP JAVASCRIPT -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {

        // Popup Login langsung tampil seperti desain Figma
        const modalElement = document.getElementById('loginModal');

        const loginModal = new bootstrap.Modal(modalElement);

        loginModal.show();

        // Form masih berupa tampilan Front-End
        document.getElementById('loginForm')
            .addEventListener('submit', function (event) {
                event.preventDefault();
            });

    });
</script>

</body>
</html>
