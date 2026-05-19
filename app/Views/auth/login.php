<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Login | Masjid Al Hikmah</title>

    <meta name="description" content="Sistem Informasi Masjid Al Hikmah">
    <meta name="keywords" content="Masjid, Dashboard, Keuangan Masjid">

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
                linear-gradient(rgba(13, 110, 253, 0.75),
                    rgba(25, 135, 84, 0.75)),
                url('<?= base_url('assets/img/ui/masjid_ui.png'); ?>');

            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
        }

        .login-card {
            border: none;
            border-radius: 20px;
            overflow: hidden;
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.96);
        }

        .login-logo img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 50%;
            box-shadow: 0 5px 20px rgba(0,0,0,.15);
        }

        .login-title {
            font-weight: 700;
            color: #012970;
        }

        .form-control {
            height: 50px;
            border-radius: 12px;
        }

        .input-group-text {
            border-radius: 12px 0 0 12px;
        }

        .btn-login {
            height: 50px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 15px;
            transition: .3s;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(13,110,253,.3);
        }

        .login-footer {
            font-size: 13px;
            color: #6c757d;
        }

        .welcome-text {
            color: #fff;
        }

        .welcome-text h1 {
            font-weight: 700;
            font-size: 42px;
        }

        .welcome-text p {
            font-size: 16px;
            opacity: .9;
        }

        @media(max-width: 991px) {
            .welcome-text {
                display: none;
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

                        <div class="welcome-text pe-5">

                            <h1>
                                Sistem Informasi
                                <br>
                                Masjid Al Hikmah
                            </h1>

                            <p class="mt-4">

                                Kelola keuangan, kegiatan masjid,
                                inventaris, jamaah, dan laporan secara
                                modern dalam satu dashboard terintegrasi.

                            </p>

                            <div class="mt-5 d-flex gap-4">

                                <div>
                                    <h3 class="fw-bold">100%</h3>
                                    <small>Management</small>
                                </div>

                                <div>
                                    <h3 class="fw-bold">Realtime</h3>
                                    <small>Laporan Keuangan</small>
                                </div>

                                <div>
                                    <h3 class="fw-bold">Digital</h3>
                                    <small>Administrasi Masjid</small>
                                </div>

                            </div>

                        </div>

                    </div>
                    <!-- END LEFT -->

                    <!-- RIGHT LOGIN -->
                    <div class="col-lg-5 col-md-8">

                        <div class="card login-card shadow-lg">

                            <div class="card-body p-5">

                                <!-- LOGO -->
                                <div class="text-center mb-4 login-logo">

                                    <img src="<?= base_url('assets/logo/brand.jpg'); ?>" alt="Logo">

                                </div>

                                <div class="text-center mb-4">

                                    <h3 class="login-title">
                                        Login Administrator
                                    </h3>

                                    <p class="text-muted small">
                                        Silahkan login untuk masuk ke dashboard
                                    </p>

                                </div>

                                <!-- ALERT -->
                                <?php if(session()->getFlashdata('error')): ?>

                                    <div class="alert alert-danger">

                                        <i class="bi bi-exclamation-triangle me-1"></i>

                                        <?= session()->getFlashdata('error'); ?>

                                    </div>

                                <?php endif; ?>

                                <!-- FORM -->
                                <form action="<?= base_url('auth/login'); ?>" method="post">

                                    <!-- USERNAME -->
                                    <div class="mb-3">

                                        <label class="form-label fw-semibold">
                                            Username
                                        </label>

                                        <div class="input-group">

                                            <span class="input-group-text">
                                                <i class="bi bi-person"></i>
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

                                    <!-- REMEMBER -->
                                    <div class="d-flex justify-content-between align-items-center mb-4">

                                        <div class="form-check">

                                            <input
                                                class="form-check-input"
                                                type="checkbox"
                                                id="rememberMe">

                                            <label class="form-check-label small" for="rememberMe">

                                                Remember me

                                            </label>

                                        </div>

                                        <a href="#" class="small text-decoration-none">

                                            Lupa Password?

                                        </a>

                                    </div>

                                    <!-- BUTTON -->
                                    <button type="submit"
                                        class="btn btn-primary w-100 btn-login">

                                        <i class="bi bi-box-arrow-in-right me-1"></i>

                                        Login Sekarang

                                    </button>

                                </form>

                                <!-- FOOTER -->
                                <div class="text-center mt-4 login-footer">

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

<!-- Vendor JS -->
<script src="<?= base_url('dash/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

</body>

</html>