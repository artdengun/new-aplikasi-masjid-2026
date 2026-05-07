```php
<?php echo view('_partials/header'); ?>

<main id="main" class="main">

  <!-- ======= PAGE TITLE ======= -->
  <div class="pagetitle">
    <h1>Transaksi Keuangan</h1>

    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?= base_url('/dashboard'); ?>">
            Dashboard
          </a>
        </li>

        <li class="breadcrumb-item active">
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

        <div class="card">

          <!-- ======= CARD HEADER ======= -->
          <div class="card-header d-flex justify-content-between align-items-center">

            <h5 class="card-title mb-0">
              Data Transaksi Keuangan
            </h5>

            <a href="<?= base_url('transaksi/create'); ?>"
               class="btn btn-success btn-sm">

              <i class="bi bi-plus-circle"></i>
              Tambah Transaksi

            </a>

          </div>
          <!-- End Card Header -->


          <!-- ======= CARD BODY ======= -->
          <div class="card-body">

            <div class="table-responsive mt-3">

              <table class="table table-bordered table-hover align-middle datatable">

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
                          <?= date('d-m-Y', strtotime($row['tanggal'])) ?>
                        </td>

                        <td>
                          <?= esc($row['keterangan']) ?>
                        </td>

                        <td>
                          <span class="badge bg-info">
                            <?= esc($row['kategori']) ?>
                          </span>
                        </td>

                        <td>
                          <strong>
                            Rp <?= number_format($row['jumlah'], 0, ',', '.') ?>
                          </strong>
                        </td>

                        <td>

                          <?php if($row['tipe'] == 'masuk'): ?>

                            <span class="badge bg-success">
                              Masuk
                            </span>

                          <?php else: ?>

                            <span class="badge bg-danger">
                              Keluar
                            </span>

                          <?php endif; ?>

                        </td>

                        <td>
                          <?= esc($row['metode']) ?>
                        </td>

                        <td>

                          <div class="d-flex gap-1">

                            <!-- EDIT -->
                            <a href="<?= base_url('transaksi/edit/'.$row['id']); ?>"
                               class="btn btn-warning btn-sm">

                              <i class="bi bi-pencil-square"></i>

                            </a>

                            <!-- DELETE -->
                            <a href="#"
                               class="btn btn-danger btn-sm btn-delete"
                               data-url="<?= base_url('transaksi/delete/'.$row['id']); ?>">

                              <i class="bi bi-trash"></i>

                            </a>

                          </div>

                        </td>

                      </tr>

                    <?php endforeach; ?>

                  <?php else: ?>

                    <tr>

                      <td colspan="8" class="text-center text-muted">
                        Belum ada data transaksi
                      </td>

                    </tr>

                  <?php endif; ?>

                </tbody>

              </table>

            </div>

          </div>
          <!-- End Card Body -->

        </div>

      </div>

    </div>
  </section>
  <!-- End CONTENT -->

</main>

<?php echo view('_partials/footer'); ?>
```
