<?php echo view('frontend/_partials/head'); ?>

<main class="main">

    <!-- ===== PAGE TITLE ===== -->
    <div class="page-title dark-background" data-aos="fade"
        style="background-image: url(assets/img/ui/background_header.jpg);">

        <div class="container position-relative">

            <h1>
                Transparansi Keuangan Masjid Al Hikmah
            </h1>

            <p class="text-white mt-2">
                Informasi pemasukan dan pengeluaran dana masjid secara terbuka
            </p>

            <nav class="breadcrumbs">
                <ol>
                    <li>
                        <a href="<?= base_url('/'); ?>">
                            Halaman Utama
                        </a>
                    </li>

                    <li class="current">
                        Laporan Keuangan
                    </li>
                </ol>
            </nav>

        </div>

    </div>
    <!-- END PAGE TITLE -->


    <?php
        $totalMasuk = array_sum(array_column(array_filter($transaksi, fn($t) => $t['tipe'] == 'masuk'), 'jumlah'));

        $totalKeluar = array_sum(array_column(array_filter($transaksi, fn($t) => $t['tipe'] == 'keluar'), 'jumlah'));

        $saldo = $totalMasuk - $totalKeluar;
    ?>


    <section class="section py-5">

        <div class="container">

            <!-- ===== INFO CARD ===== -->
            <div class="row g-4 mb-5">

                <!-- PEMASUKAN -->
                <div class="col-lg-4 col-md-6">

                    <div class="card border-0 shadow-sm h-100">

                        <div class="card-body text-center p-4">

                            <div class="mb-3">
                                <i class="bi bi-arrow-down-circle-fill text-success"
                                    style="font-size:50px;"></i>
                            </div>

                            <h6 class="text-muted">
                                Total Pemasukan
                            </h6>

                            <h3 class="fw-bold text-success">

                                Rp
                                <?= number_format($totalMasuk, 0, ',', '.'); ?>

                            </h3>

                        </div>

                    </div>

                </div>

                <!-- PENGELUARAN -->
                <div class="col-lg-4 col-md-6">

                    <div class="card border-0 shadow-sm h-100">

                        <div class="card-body text-center p-4">

                            <div class="mb-3">
                                <i class="bi bi-arrow-up-circle-fill text-danger"
                                    style="font-size:50px;"></i>
                            </div>

                            <h6 class="text-muted">
                                Total Pengeluaran
                            </h6>

                            <h3 class="fw-bold text-danger">

                                Rp
                                <?= number_format($totalKeluar, 0, ',', '.'); ?>

                            </h3>

                        </div>

                    </div>

                </div>

                <!-- SALDO -->
                <div class="col-lg-4 col-md-12">

                    <div class="card border-0 shadow-sm h-100 bg-primary text-white">

                        <div class="card-body text-center p-4">

                            <div class="mb-3">
                                <i class="bi bi-wallet2"
                                    style="font-size:50px;"></i>
                            </div>

                            <h6 class="opacity-75">
                                Saldo Kas Masjid
                            </h6>

                            <h3 class="fw-bold">

                                Rp
                                <?= number_format($saldo, 0, ',', '.'); ?>

                            </h3>

                        </div>

                    </div>

                </div>

            </div>
            <!-- END INFO CARD -->


            <!-- ===== FILTER ===== -->
            <div class="card border-0 shadow-sm mb-4">

                <div class="card-body p-4">

                    <div class="row g-3 align-items-end">

                        <div class="col-md-4">

                            <label class="form-label fw-semibold">
                                Cari Transaksi
                            </label>

                            <input type="text"
                                id="searchTable"
                                class="form-control"
                                placeholder="Cari keterangan / kategori">

                        </div>

                        <div class="col-md-3">

                            <label class="form-label fw-semibold">
                                Filter Tipe
                            </label>

                            <select id="filterTipe" class="form-select">

                                <option value="">
                                    Semua
                                </option>

                                <option value="masuk">
                                    Pemasukan
                                </option>

                                <option value="keluar">
                                    Pengeluaran
                                </option>

                            </select>

                        </div>

                        <div class="col-md-3">

                            <label class="form-label fw-semibold">
                                Filter Metode
                            </label>

                            <select id="filterMetode" class="form-select">

                                <option value="">
                                    Semua Metode
                                </option>

                                <option value="Cash">
                                    Cash
                                </option>

                                <option value="Transfer">
                                    Transfer
                                </option>

                                <option value="QRIS">
                                    QRIS
                                </option>

                            </select>

                        </div>

                    </div>

                </div>

            </div>
            <!-- END FILTER -->


            <!-- ===== TABLE ===== -->
            <div class="card border-0 shadow-sm">

                <div class="card-body p-4">

                    <div class="d-flex justify-content-between align-items-center mb-4">

                        <div>

                            <h4 class="fw-bold mb-1">

                                <i class="bi bi-table me-2 text-primary"></i>
                                Laporan Transaksi Keuangan

                            </h4>

                            <small class="text-muted">
                                Seluruh data pemasukan dan pengeluaran masjid
                            </small>

                        </div>

                    </div>


                    <div class="table-responsive">

                        <table id="tableKeuangan"
                            class="table table-hover align-middle">

                            <thead class="table-light">

                                <tr>

                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Keterangan</th>
                                    <th>Kategori</th>
                                    <th>Tipe</th>
                                    <th>Metode</th>
                                    <th class="text-end">Jumlah</th>

                                </tr>

                            </thead>

                            <tbody>

                                <?php if(!empty($transaksi)): ?>

                                <?php foreach($transaksi as $key => $row): ?>

                                <tr>

                                    <td>
                                        <?= $key + 1; ?>
                                    </td>

                                    <td>

                                        <?= date('d M Y', strtotime($row['tanggal'])); ?>

                                    </td>

                                    <td>

                                        <strong>
                                            <?= esc($row['keterangan']); ?>
                                        </strong>

                                    </td>

                                    <td>

                                        <span class="badge bg-info text-dark">

                                            <?= esc($row['kategori']); ?>

                                        </span>

                                    </td>

                                    <td>

                                        <?php if($row['tipe'] == 'masuk'): ?>

                                        <span class="badge bg-success">

                                            Pemasukan

                                        </span>

                                        <?php else: ?>

                                        <span class="badge bg-danger">

                                            Pengeluaran

                                        </span>

                                        <?php endif; ?>

                                    </td>

                                    <td>

                                        <?php if($row['metode'] == 'Cash'): ?>

                                        <span class="badge bg-dark">
                                            Cash
                                        </span>

                                        <?php elseif($row['metode'] == 'Transfer'): ?>

                                        <span class="badge bg-primary">
                                            Transfer
                                        </span>

                                        <?php else: ?>

                                        <span class="badge bg-success">
                                            QRIS
                                        </span>

                                        <?php endif; ?>

                                    </td>

                                    <td class="text-end">

                                        <?php if($row['tipe'] == 'masuk'): ?>

                                        <strong class="text-success">

                                            + Rp
                                            <?= number_format($row['jumlah'], 0, ',', '.'); ?>

                                        </strong>

                                        <?php else: ?>

                                        <strong class="text-danger">

                                            - Rp
                                            <?= number_format($row['jumlah'], 0, ',', '.'); ?>

                                        </strong>

                                        <?php endif; ?>

                                    </td>

                                </tr>

                                <?php endforeach; ?>

                                <?php else: ?>

                                <tr>

                                    <td colspan="7" class="text-center py-5">

                                        <i class="bi bi-inbox fs-1 d-block mb-3 text-muted"></i>

                                        Belum ada data transaksi

                                    </td>

                                </tr>

                                <?php endif; ?>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>
            <!-- END TABLE -->


            <!-- ===== FOOTER INFO ===== -->
            <div class="text-center mt-4">

                <small class="text-muted">

                    Data keuangan diperbarui secara berkala oleh pengurus
                    Masjid Al Hikmah untuk menjaga transparansi kepada jamaah.

                </small>

            </div>

        </div>

    </section>

</main>

<?php echo view('frontend/_partials/footer'); ?>


<!-- DATATABLE -->
<link rel="stylesheet"
    href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>


<script>
$(document).ready(function() {

    let table = $('#tableKeuangan').DataTable({

        responsive: true,
        pageLength: 10,
        ordering: true,
        language: {

            search: "Cari:",
            lengthMenu: "Tampilkan _MENU_ data",
            info: "Menampilkan _START_ - _END_ dari _TOTAL_ data",
            paginate: {
                previous: "Prev",
                next: "Next"
            }

        }

    });


    // SEARCH
    $('#searchTable').on('keyup', function() {

        table.search(this.value).draw();

    });


    // FILTER TIPE
    $('#filterTipe').on('change', function() {

        table.column(4)
            .search(this.value)
            .draw();

    });


    // FILTER METODE
    $('#filterMetode').on('change', function() {

        table.column(5)
            .search(this.value)
            .draw();

    });

});
</script>