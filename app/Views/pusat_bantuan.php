<?php echo view('_partials/header'); ?>

<main id="main" class="main">

    <!-- ======= PAGE TITLE ======= -->
    <div class="pagetitle">

        <h1>
            <i class="bi bi-question-circle-fill me-2 text-primary"></i>
            Pusat Bantuan & FAQ
        </h1>

        <nav>
            <ol class="breadcrumb">

                <li class="breadcrumb-item">
                    <a href="<?= base_url('/dashboard'); ?>">
                        <i class="bi bi-house-door"></i>
                        Dashboard
                    </a>
                </li>

                <li class="breadcrumb-item active">
                    FAQ
                </li>

            </ol>
        </nav>

    </div>
    <!-- End Page Title -->


    <section class="section faq">

        <div class="row">

            <!-- ===== LEFT ===== -->
            <div class="col-lg-6">

                <!-- INTRO -->
                <div class="card border-0 shadow-sm">

                    <div class="card-body">

                        <h5 class="card-title">
                            <i class="bi bi-info-circle text-primary me-2"></i>
                            Tentang Sistem
                        </h5>

                        <div class="mb-3">
                            <h6>1. Apa fungsi aplikasi manajemen masjid ini?</h6>

                            <p>
                                Sistem ini digunakan untuk membantu pengelolaan administrasi masjid seperti transaksi
                                keuangan, inventaris aset, kegiatan masjid, dan data jamaah secara digital.
                            </p>
                        </div>

                        <div class="mb-3">
                            <h6>2. Siapa yang dapat mengakses dashboard?</h6>

                            <p>
                                Dashboard hanya dapat diakses oleh admin atau pengurus masjid yang memiliki akun login.
                            </p>
                        </div>

                        <div>
                            <h6>3. Apakah data tersimpan otomatis?</h6>

                            <p>
                                Ya, semua transaksi dan aktivitas akan tersimpan langsung ke database sistem.
                            </p>
                        </div>

                    </div>

                </div>


                <!-- FAQ KEUANGAN -->
                <div class="card shadow-sm border-0">

                    <div class="card-body">

                        <h5 class="card-title">
                            <i class="bi bi-cash-stack text-success me-2"></i>
                            FAQ Keuangan
                        </h5>

                        <div class="accordion accordion-flush" id="faq-keuangan">

                            <div class="accordion-item">

                                <h2 class="accordion-header">

                                    <button class="accordion-button collapsed"
                                        data-bs-target="#keuangan-1"
                                        type="button"
                                        data-bs-toggle="collapse">

                                        Bagaimana cara menambah transaksi?

                                    </button>

                                </h2>

                                <div id="keuangan-1"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#faq-keuangan">

                                    <div class="accordion-body">

                                        Masuk ke menu Transaksi Keuangan lalu klik tombol
                                        <strong>Tambah Transaksi</strong>.

                                    </div>

                                </div>

                            </div>

                            <div class="accordion-item">

                                <h2 class="accordion-header">

                                    <button class="accordion-button collapsed"
                                        data-bs-target="#keuangan-2"
                                        type="button"
                                        data-bs-toggle="collapse">

                                        Apakah laporan keuangan bisa dicetak?

                                    </button>

                                </h2>

                                <div id="keuangan-2"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#faq-keuangan">

                                    <div class="accordion-body">

                                        Ya, laporan dapat diexport ke PDF, Excel, dan langsung diprint.

                                    </div>

                                </div>

                            </div>

                            <div class="accordion-item">

                                <h2 class="accordion-header">

                                    <button class="accordion-button collapsed"
                                        data-bs-target="#keuangan-3"
                                        type="button"
                                        data-bs-toggle="collapse">

                                        Apakah saldo dihitung otomatis?

                                    </button>

                                </h2>

                                <div id="keuangan-3"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#faq-keuangan">

                                    <div class="accordion-body">

                                        Ya, sistem otomatis menghitung total pemasukan,
                                        pengeluaran, dan saldo akhir.

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
            <!-- END LEFT -->


            <!-- ===== RIGHT ===== -->
            <div class="col-lg-6">

                <!-- FAQ ASET -->
                <div class="card shadow-sm border-0">

                    <div class="card-body">

                        <h5 class="card-title">
                            <i class="bi bi-building text-warning me-2"></i>
                            FAQ Inventaris & Aset
                        </h5>

                        <div class="accordion accordion-flush" id="faq-aset">

                            <div class="accordion-item">

                                <h2 class="accordion-header">

                                    <button class="accordion-button collapsed"
                                        data-bs-target="#aset-1"
                                        type="button"
                                        data-bs-toggle="collapse">

                                        Apa fungsi menu inventaris?

                                    </button>

                                </h2>

                                <div id="aset-1"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#faq-aset">

                                    <div class="accordion-body">

                                        Digunakan untuk mencatat seluruh aset dan perlengkapan masjid.

                                    </div>

                                </div>

                            </div>

                            <div class="accordion-item">

                                <h2 class="accordion-header">

                                    <button class="accordion-button collapsed"
                                        data-bs-target="#aset-2"
                                        type="button"
                                        data-bs-toggle="collapse">

                                        Apakah aset bisa diedit?

                                    </button>

                                </h2>

                                <div id="aset-2"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#faq-aset">

                                    <div class="accordion-body">

                                        Bisa. Admin dapat mengubah, memperbarui,
                                        dan menghapus data inventaris.

                                    </div>

                                </div>

                            </div>

                            <div class="accordion-item">

                                <h2 class="accordion-header">

                                    <button class="accordion-button collapsed"
                                        data-bs-target="#aset-3"
                                        type="button"
                                        data-bs-toggle="collapse">

                                        Apa fungsi maintenance?

                                    </button>

                                </h2>

                                <div id="aset-3"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#faq-aset">

                                    <div class="accordion-body">

                                        Digunakan untuk mencatat perawatan dan perbaikan aset masjid.

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- FAQ KEGIATAN -->
                <div class="card shadow-sm border-0">

                    <div class="card-body">

                        <h5 class="card-title">
                            <i class="bi bi-calendar-event text-danger me-2"></i>
                            FAQ Kegiatan & Jamaah
                        </h5>

                        <div class="accordion accordion-flush" id="faq-kegiatan">

                            <div class="accordion-item">

                                <h2 class="accordion-header">

                                    <button class="accordion-button collapsed"
                                        data-bs-target="#kegiatan-1"
                                        type="button"
                                        data-bs-toggle="collapse">

                                        Apa saja yang bisa dimasukkan ke kegiatan masjid?

                                    </button>

                                </h2>

                                <div id="kegiatan-1"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#faq-kegiatan">

                                    <div class="accordion-body">

                                        Kajian, tabligh akbar, santunan sosial,
                                        kerja bakti, dan kegiatan dakwah lainnya.

                                    </div>

                                </div>

                            </div>

                            <div class="accordion-item">

                                <h2 class="accordion-header">

                                    <button class="accordion-button collapsed"
                                        data-bs-target="#kegiatan-2"
                                        type="button"
                                        data-bs-toggle="collapse">

                                        Apakah data jamaah bisa ditambah manual?

                                    </button>

                                </h2>

                                <div id="kegiatan-2"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#faq-kegiatan">

                                    <div class="accordion-body">

                                        Ya, admin dapat menambahkan data jamaah secara manual.

                                    </div>

                                </div>

                            </div>

                            <div class="accordion-item">

                                <h2 class="accordion-header">

                                    <button class="accordion-button collapsed"
                                        data-bs-target="#kegiatan-3"
                                        type="button"
                                        data-bs-toggle="collapse">

                                        Bagaimana jika lupa password akun?

                                    </button>

                                </h2>

                                <div id="kegiatan-3"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#faq-kegiatan">

                                    <div class="accordion-body">

                                        Hubungi administrator sistem untuk reset password akun.

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
            <!-- END RIGHT -->

        </div>

    </section>

</main>

<?php echo view('_partials/footer'); ?>