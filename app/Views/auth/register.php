<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Register | Masjid Al Hikmah</title>

    <meta name="description" content="Sistem Informasi Masjid Al Hikmah">
    <meta name="keywords" content="Masjid, Dashboard, Management Masjid">

    <!-- Favicon -->
    <link href="<?= base_url('assets/logo/brand.jpg'); ?>" rel="icon">
    <link href="<?= base_url('assets/logo/brand.jpg'); ?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700|Nunito:300,400,600,700|Poppins:300,400,500,600,700"
        rel="stylesheet">

    <!-- Vendor CSS -->
    <link href="<?= base_url('dash/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('dash/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">

    <!-- Main CSS -->
    <link href="<?= base_url('dash/css/style.css'); ?>" rel="stylesheet">

    <style>

        body {
            background:
                linear-gradient(rgba(13, 110, 253, 0.80),
                    rgba(25, 135, 84, 0.80)),
                url('<?= base_url('assets/img/ui/masjid_ui.png'); ?>');

            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
        }

        .register-card {
            border: none;
            border-radius: 24px;
            overflow: hidden;
            backdrop-filter: blur(10px);
            background: rgba(255,255,255,0.96);
        }

        .register-logo img {
            width: 85px;
            height: 85px;
            object-fit: cover;
            border-radius: 50%;
            box-shadow: 0 5px 20px rgba(0,0,0,.15);
        }

        .register-title {
            color: #012970;
            font-weight: 700;
        }

        .form-control {
            height: 52px;
            border-radius: 12px;
        }

        .input-group-text {
            border-radius: 12px 0 0 12px;
        }

        .btn-register {
            height: 52px;
            border-radius: 12px;
            font-weight: 600;
            transition: .3s;
        }

        .btn-register:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(13,110,253,.25);
        }

        .welcome-box {
            color: #fff;
        }

        .welcome-box h1 {
            font-size: 42px;
            font-weight: 700;
            line-height: 1.3;
        }

        .welcome-box p {
            opacity: .9;
            font-size: 16px;
            margin-top: 20px;
        }

        .feature-item {
            background: rgba(255,255,255,.12);
            border: 1px solid rgba(255,255,255,.2);
            padding: 16px;
            border-radius: 16px;
            backdrop-filter: blur(10px);
        }

        .feature-item i {
            font-size: 28px;
        }

        .footer-text {
            font-size: 13px;
            color: #6c757d;
        }

        @media(max-width: 991px){

            .welcome-box{
                display:none;
            }

        }

    </style>

</head>

<body>

<main>

    <div class="container">

        <section class="section register min-vh-100 d-flex align-items-center">

            <div class="container">

                <div class="row justify-content-center align-items-center">

                    <!-- LEFT CONTENT -->
                    <div class="col-lg-6 d-none d-lg-block">

                        <div class="welcome-box pe-5">

                            <h1>

                                Bergabung Dengan
                                <br>
                                Sistem Masjid Al Hikmah

                            </h1>

                            <p>

                                Sistem digital modern untuk membantu
                                pengelolaan administrasi, kegiatan,
                                keuangan, dan jamaah masjid secara
                                lebih profesional.

                            </p>

                            <div class="row mt-5 g-3">

                                <div class="col-6">

                                    <div class="feature-item">

                                        <i class="bi bi-cash-stack"></i>

                                        <h6 class="mt-3 mb-1">
                                            Keuangan Digital
                                        </h6>

                                        <small>
                                            Monitoring pemasukan &
                                            pengeluaran realtime
                                        </small>

                                    </div>

                                </div>

                                <div class="col-6">

                                    <div class="feature-item">

                                        <i class="bi bi-calendar-event"></i>

                                        <h6 class="mt-3 mb-1">
                                            Event Masjid
                                        </h6>

                                        <small>
                                            Kelola kegiatan dan dakwah
                                            lebih terstruktur
                                        </small>

                                    </div>

                                </div>

                                <div class="col-6">

                                    <div class="feature-item">

                                        <i class="bi bi-people"></i>

                                        <h6 class="mt-3 mb-1">
                                            Data Jamaah
                                        </h6>

                                        <small>
                                            Pendataan jamaah &
                                            relawan masjid
                                        </small>

                                    </div>

                                </div>

                                <div class="col-6">

                                    <div class="feature-item">

                                        <i class="bi bi-bar-chart"></i>

                                        <h6 class="mt-3 mb-1">
                                            Laporan Lengkap
                                        </h6>

                                        <small>
                                            Export PDF, Excel,
                                            dan statistik modern
                                        </small>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                    <!-- END LEFT -->

                    <!-- RIGHT REGISTER -->
                    <div class="col-lg-5 col-md-8">

                        <div class="card register-card shadow-lg">

                            <div class="card-body p-5">

                                <!-- LOGO -->
                                <div class="text-center register-logo mb-4">

                                    <img src="<?= base_url('assets/logo/brand.jpg'); ?>" alt="Logo">

                                </div>

                                <!-- TITLE -->
                                <div class="text-center mb-4">

                                    <h3 class="register-title">
                                        Buat Akun Baru
                                    </h3>

                                    <p class="text-muted small">

                                        Silahkan lengkapi data dibawah ini

                                    </p>

                                </div>

                                <!-- ALERT -->
                                <?php if(session()->getFlashdata('error')): ?>

                                    <div class="alert alert-danger">

                                        <i class="bi bi-exclamation-circle me-1"></i>

                                        <?= session()->getFlashdata('error'); ?>

                                    </div>

                                <?php endif; ?>

                                <!-- FORM -->
                                <form action="<?= base_url('auth/register'); ?>" method="post">

                                    <!-- NAMA -->
                                    <div class="mb-3">

                                        <label class="form-label fw-semibold">
                                            Nama Lengkap
                                        </label>

                                        <div class="input-group">

                                            <span class="input-group-text">
                                                <i class="bi bi-person"></i>
                                            </span>

                                            <input
                                                type="text"
                                                name="name"
                                                class="form-control"
                                                placeholder="Masukkan nama lengkap"
                                                required>

                                        </div>

                                    </div>

                                    <!-- EMAIL -->
                                    <div class="mb-3">

                                        <label class="form-label fw-semibold">
                                            Email
                                        </label>

                                        <div class="input-group">

                                            <span class="input-group-text">
                                                <i class="bi bi-envelope"></i>
                                            </span>

                                            <input
                                                type="email"
                                                name="email"
                                                class="form-control"
                                                placeholder="Masukkan email"
                                                required>

                                        </div>

                                    </div>

                                    <!-- USERNAME -->
                                    <div class="mb-3">

                                        <label class="form-label fw-semibold">
                                            Username
                                        </label>

                                        <div class="input-group">

                                            <span class="input-group-text">
                                                @
                                            </span>

                                            <input
                                                type="text"
                                                name="username"
                                                class="form-control"
                                                placeholder="Masukkan username"
                                                required>

                                        </div>

                                    </div>

                                    <!-- PASSWORD -->
                                    <div class="mb-3">

                                        <label class="form-label fw-semibold">
                                            Password
                                        </label>

                                        <div class="input-group">

                                            <span class="input-group-text">
                                                <i class="bi bi-lock"></i>
                                            </span>

                                            <input
                                                type="password"
                                                name="password"
                                                class="form-control"
                                                placeholder="Masukkan password"
                                                required>

                                        </div>

                                    </div>

                                    <!-- TERMS -->
                                    <div class="form-check mb-4">

                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            required>

                                        <label class="form-check-label small">

                                            Saya menyetujui syarat dan ketentuan
                                            penggunaan sistem

                                        </label>

                                    </div>

                                    <!-- BUTTON -->
                                    <button type="submit"
                                        class="btn btn-success w-100 btn-register">

                                        <i class="bi bi-person-plus me-1"></i>

                                        Daftar Sekarang

                                    </button>

                                    <!-- LOGIN -->
                                    <div class="text-center mt-4">

                                        <small class="text-muted">

                                            Sudah punya akun?

                                            <a href="<?= base_url('masuk'); ?>"
                                                class="fw-semibold text-decoration-none">

                                                Login disini

                                            </a>

                                        </small>

                                    </div>

                                </form>

                                <!-- FOOTER -->
                                <div class="text-center mt-4 footer-text">

                                    © <?= date('Y'); ?> Masjid Al Hikmah
                                    <br>
                                    Sistem Informasi Manajemen Masjid

                                </div>

                            </div>

                        </div>

                    </div>
                    <!-- END RIGHT -->

                </div>

            </div>

        </section>

    </div>

</main>

<script src="<?= base_url('dash/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

</body>

</html>