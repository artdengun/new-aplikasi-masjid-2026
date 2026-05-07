<?php echo view('_partials/header'); ?>

<main id="main" class="main">

    <!-- ======= PAGE TITLE ======= -->
    <div class="pagetitle">

        <h1>
            <i class="bi bi-cash-stack me-2"></i>
            Transaksi Keuangan
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

                    <i class="bi bi-wallet2"></i>
                    Transaksi

                </li>

            </ol>
        </nav>

    </div>
    <!-- End Page Title -->


    <!-- ======= CONTENT ======= -->
    <section class="section dashboard">

        <div class="row">

            <div class="col-12">

                <!-- 🔥 CARD UTAMA -->
                <div class="card shadow-sm border-0 mt-4">

                    <!-- ======= CARD HEADER ======= -->
                    <div
                        class="card-header bg-white border-0 pt-4 pb-3 px-4 d-flex justify-content-between align-items-center">

                        <h5 class="card-title mb-0 fw-bold">

                            <i class="bi bi-table me-2 text-primary"></i>
                            Data Transaksi Keuangan

                        </h5>

                        <a href="<?= base_url('transaksi/create'); ?>" class="btn btn-success btn-sm shadow-sm">

                            <i class="bi bi-plus-circle me-1"></i>
                            Tambah Transaksi

                        </a>

                    </div>
                    <!-- End Card Header -->


                    <!-- ======= CARD BODY ======= -->
                    <div class="card-body px-4 pb-4">

                        <!-- ======= CARD INFO ======= -->
                        <div class="row g-3 mb-4 mt-1">

                            <!-- TOTAL -->
                            <div class="col-md-3">

                                <div class="card border-0 shadow-sm h-100 bg-primary text-white">

                                    <div class="card-body">

                                        <div class="d-flex justify-content-between align-items-center">

                                            <div>

                                                <small class="opacity-75">
                                                    Total Transaksi
                                                </small>

                                                <h3 class="fw-bold mt-2 mb-0">
                                                    <?= count($transaksi); ?>
                                                </h3>

                                            </div>

                                            <i class="bi bi-receipt fs-1 opacity-75"></i>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!-- PEMASUKAN -->
                            <div class="col-md-3">

                                <div class="card border-0 shadow-sm h-100 bg-success text-white">

                                    <div class="card-body">

                                        <div class="d-flex justify-content-between align-items-center">

                                            <div>

                                                <small class="opacity-75">
                                                    Pemasukan
                                                </small>

                                                <h5 class="fw-bold mt-2 mb-0">

                                                    Rp
                                                    <?= number_format(array_sum(array_column(array_filter($transaksi, fn($t) => $t['tipe'] == 'masuk'), 'jumlah')), 0, ',', '.'); ?>

                                                </h5>

                                            </div>

                                            <i class="bi bi-arrow-down-circle fs-1 opacity-75"></i>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!-- PENGELUARAN -->
                            <div class="col-md-3">

                                <div class="card border-0 shadow-sm h-100 bg-danger text-white">

                                    <div class="card-body">

                                        <div class="d-flex justify-content-between align-items-center">

                                            <div>

                                                <small class="opacity-75">
                                                    Pengeluaran
                                                </small>

                                                <h5 class="fw-bold mt-2 mb-0">

                                                    Rp
                                                    <?= number_format(array_sum(array_column(array_filter($transaksi, fn($t) => $t['tipe'] == 'keluar'), 'jumlah')), 0, ',', '.'); ?>

                                                </h5>

                                            </div>

                                            <i class="bi bi-arrow-up-circle fs-1 opacity-75"></i>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!-- SALDO -->
                            <div class="col-md-3">

                                <?php
                  $masuk = array_sum(array_column(array_filter($transaksi, fn($t) => $t['tipe'] == 'masuk'), 'jumlah'));
                  $keluar = array_sum(array_column(array_filter($transaksi, fn($t) => $t['tipe'] == 'keluar'), 'jumlah'));
                  $saldo = $masuk - $keluar;
                ?>

                                <div class="card border-0 shadow-sm h-100 bg-warning text-dark">

                                    <div class="card-body">

                                        <div class="d-flex justify-content-between align-items-center">

                                            <div>

                                                <small class="opacity-75">
                                                    Saldo
                                                </small>

                                                <h5 class="fw-bold mt-2 mb-0">

                                                    Rp <?= number_format($saldo, 0, ',', '.'); ?>

                                                </h5>

                                            </div>

                                            <i class="bi bi-wallet2 fs-1 opacity-75"></i>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                        <!-- End Card Info -->


                        <!-- ======= TABLE ======= -->
                        <div class="table-responsive mt-3">

                            <table class="table table-hover table-bordered align-middle datatable">

                                <thead class="table-light">

                                    <tr>

                                        <th width="5%">No</th>
                                        <th>Tanggal</th>
                                        <th>Keterangan</th>
                                        <th>Kategori</th>
                                        <th>Jumlah</th>
                                        <th>Tipe</th>
                                        <th>Metode</th>
                                        <th width="12%">Aksi</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    <?php if(!empty($transaksi)): ?>

                                    <?php foreach ($transaksi as $key => $row): ?>

                                    <tr>

                                        <td>
                                            <?= $key + 1 ?>
                                        </td>

                                        <td>

                                            <i class="bi bi-calendar-event text-primary me-1"></i>

                                            <?= date('d-m-Y', strtotime($row['tanggal'])) ?>

                                        </td>

                                        <td>

                                            <strong>
                                                <?= esc($row['keterangan']) ?>
                                            </strong>

                                        </td>

                                        <td>

                                            <span class="badge bg-info text-dark">

                                                <i class="bi bi-tags"></i>

                                                <?= esc($row['kategori']) ?>

                                            </span>

                                        </td>

                                        <td>

                                            <strong class="text-success">

                                                Rp <?= number_format($row['jumlah'], 0, ',', '.') ?>

                                            </strong>

                                        </td>

                                        <td>

                                            <?php if($row['tipe'] == 'masuk'): ?>

                                            <span class="badge bg-success">

                                                <i class="bi bi-arrow-down-circle"></i>
                                                Masuk

                                            </span>

                                            <?php else: ?>

                                            <span class="badge bg-danger">

                                                <i class="bi bi-arrow-up-circle"></i>
                                                Keluar

                                            </span>

                                            <?php endif; ?>

                                        </td>

                                        <td>

                                            <?php if($row['metode'] == 'Cash'): ?>

                                            <span class="badge bg-dark">

                                                <i class="bi bi-cash"></i>
                                                Cash

                                            </span>

                                            <?php elseif($row['metode'] == 'Transfer'): ?>

                                            <span class="badge bg-primary">

                                                <i class="bi bi-bank"></i>
                                                Transfer

                                            </span>

                                            <?php else: ?>

                                            <span class="badge bg-success">

                                                <i class="bi bi-qr-code"></i>
                                                QRIS

                                            </span>

                                            <?php endif; ?>

                                        </td>

                                        <td>

                                            <div class="d-flex gap-1">

                                                <!-- EDIT -->
                                                <a href="<?= base_url('transaksi/edit/'.$row['id']); ?>"
                                                    class="btn btn-warning btn-sm">

                                                    <i class="bi bi-pencil-square"></i>

                                                </a>

                                                <!-- DELETE -->
                                                <a href="#" class="btn btn-danger btn-sm btn-delete"
                                                    data-url="<?= base_url('transaksi/delete/'.$row['id']); ?>">

                                                    <i class="bi bi-trash"></i>

                                                </a>

                                            </div>

                                        </td>

                                    </tr>

                                    <?php endforeach; ?>

                                    <?php else: ?>

                                    <tr>

                                        <td colspan="8" class="text-center text-muted py-5">

                                            <i class="bi bi-inbox fs-1 d-block mb-3"></i>

                                            Belum ada data transaksi

                                        </td>

                                    </tr>

                                    <?php endif; ?>

                                </tbody>

                            </table>

                        </div>
                        <!-- End TABLE -->

                    </div>
                    <!-- End Card Body -->

                </div>
                <!-- End CARD -->

            </div>

        </div>

    </section>
    <!-- End CONTENT -->

</main>

<?php echo view('_partials/footer'); ?>