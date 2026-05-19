<!-- app/Views/kegiatan/index.php -->

<?php echo view('_partials/header'); ?>

<main id="main" class="main">

    <div class="pagetitle">

        <h1>

            <i class="bi bi-calendar-event"></i>
            Kegiatan Masjid

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

                    <i class="bi bi-calendar2-week"></i>
                    Kegiatan

                </li>

            </ol>

        </nav>

    </div>

    <section class="section dashboard">

        <div class="row">

            <div class="col-12">

                <div class="card shadow-sm border-0">

                    <div class="card-header d-flex justify-content-between align-items-center">

                        <h5 class="card-title mb-0">

                            <i class="bi bi-table"></i>
                            Data Kegiatan

                        </h5>

                        <a href="<?= base_url('kegiatan/create'); ?>"
                            class="btn btn-success btn-sm">

                            <i class="bi bi-plus-circle"></i>
                            Tambah Kegiatan

                        </a>

                    </div>

                    <div class="card-body">

                        <!-- STATISTIK -->
                        <div class="row mt-4 mb-4 g-3">

                            <!-- TOTAL -->
                            <div class="col-md-4">

                                <div class="card bg-primary text-white shadow-sm border-0">

                                    <div class="card-body">

                                        <div class="d-flex justify-content-between align-items-center">

                                            <div>

                                                <h6 class="mb-1">
                                                    Total Kegiatan
                                                </h6>

                                                <h3 class="mb-0">
                                                    <?= count($kegiatan); ?>
                                                </h3>

                                            </div>

                                            <i class="bi bi-calendar-event fs-1"></i>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!-- PUBLISH -->
                            <div class="col-md-4">

                                <div class="card bg-success text-white shadow-sm border-0">

                                    <div class="card-body">

                                        <div class="d-flex justify-content-between align-items-center">

                                            <div>

                                                <h6 class="mb-1">
                                                    Publish
                                                </h6>

                                                <h3 class="mb-0">
                                                    <?= count(array_filter($kegiatan, fn($k) => $k['status'] == 'publish')); ?>
                                                </h3>

                                            </div>

                                            <i class="bi bi-check-circle fs-1"></i>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!-- DRAFT -->
                            <div class="col-md-4">

                                <div class="card bg-warning text-dark shadow-sm border-0">

                                    <div class="card-body">

                                        <div class="d-flex justify-content-between align-items-center">

                                            <div>

                                                <h6 class="mb-1">
                                                    Draft
                                                </h6>

                                                <h3 class="mb-0">
                                                    <?= count(array_filter($kegiatan, fn($k) => $k['status'] == 'draft')); ?>
                                                </h3>

                                            </div>

                                            <i class="bi bi-pencil-square fs-1"></i>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <!-- TABLE -->
                        <div class="table-responsive">

                            <table class="table table-hover table-bordered align-middle datatable">

                                <thead class="table-light">

                                    <tr>

                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Judul</th>
                                        <th>Kategori</th>
                                        <th>Tanggal</th>
                                        <th>Jam</th>
                                        <th>Lokasi</th>
                                        <th>Status</th>
                                        <th width="120">Aksi</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    <?php foreach($kegiatan as $key => $row): ?>

                                    <tr>

                                        <td>
                                            <?= $key + 1 ?>
                                        </td>

                                        <td>

                                            <?php if($row['gambar']): ?>

                                            <img src="<?= base_url('uploads/kegiatan/' . $row['gambar']); ?>"
                                                width="80"
                                                class="rounded shadow-sm">

                                            <?php else: ?>

                                            <span class="badge bg-secondary">
                                                No Image
                                            </span>

                                            <?php endif; ?>

                                        </td>

                                        <td>

                                            <strong>
                                                <?= $row['judul']; ?>
                                            </strong>

                                        </td>

                                        <td>

                                            <span class="badge bg-info text-dark">

                                                <i class="bi bi-tags"></i>

                                                <?= $row['kategori']; ?>

                                            </span>

                                        </td>

                                        <td>

                                            <span class="badge bg-primary">

                                                <i class="bi bi-calendar-date"></i>

                                                <?= date('d M Y', strtotime($row['tanggal_kegiatan'])); ?>

                                            </span>

                                        </td>

                                        <td>

                                            <span class="badge bg-dark">

                                                <i class="bi bi-clock"></i>

                                                <?= date('H:i', strtotime($row['jam_kegiatan'])); ?> WIB

                                            </span>

                                        </td>

                                        <td>

                                            <i class="bi bi-geo-alt"></i>

                                            <?= $row['lokasi']; ?>

                                        </td>

                                        <td>

                                            <?php if($row['status'] == 'publish'): ?>

                                            <span class="badge bg-success">

                                                <i class="bi bi-check-circle"></i>
                                                Publish

                                            </span>

                                            <?php else: ?>

                                            <span class="badge bg-warning text-dark">

                                                <i class="bi bi-pencil-square"></i>
                                                Draft

                                            </span>

                                            <?php endif; ?>

                                        </td>

                                        <td>

                                            <div class="d-flex gap-1">

                                                <a href="<?= base_url('kegiatan/edit/'.$row['id']); ?>"
                                                    class="btn btn-warning btn-sm">

                                                    <i class="bi bi-pencil-square"></i>

                                                </a>

                                                <a href="#"
                                                    class="btn btn-danger btn-sm btn-delete"
                                                    data-url="<?= base_url('kegiatan/delete/'.$row['id']); ?>">

                                                    <i class="bi bi-trash"></i>

                                                </a>

                                            </div>

                                        </td>

                                    </tr>

                                    <?php endforeach; ?>

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

</main>

<?php echo view('_partials/footer'); ?>