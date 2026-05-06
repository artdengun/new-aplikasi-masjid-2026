<?php echo view('_partials/header'); ?>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Transaksi Keuangan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?= base_url('/dashboard'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Transaksi</li>
      </ol>
    </nav>
  </div>

  <section class="section dashboard">
    <div class="row">

      <div class="col-12">
        <div class="card">

          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="card-title mb-0">Data Transaksi</h5>
            <a href="<?= base_url('transaksi/create'); ?>" class="btn btn-success btn-sm">
              + Tambah Transaksi
            </a>
          </div>

          <div class="card-body">

        <?php if(session()->getFlashdata('success')): ?>
        <script>
        Swal.fire({
        icon: 'success',
        title: 'Berhasil',
        text: '<?= session()->getFlashdata('success'); ?>',
        timer: 2000,
        showConfirmButton: false
        });
        </script>
        <?php endif; ?>
            <div class="table-responsive">
              <table class="table table-borderless datatable">

                <thead>
                  <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Keterangan</th>
                    <th>Kategori</th>
                    <th>Jumlah</th>
                    <th>Tipe</th>
                    <th>Metode</th>
                    <th>Aksi</th>
                  </tr>
                </thead>

                <tbody>
                  <?php foreach ($transaksi as $key => $row): ?>
                  <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= date('d-m-Y', strtotime($row['tanggal'])) ?></td>
                    <td><?= $row['keterangan'] ?></td>
                    <td><?= $row['kategori'] ?></td>

                    <td>
                      Rp <?= number_format($row['jumlah'], 0, ',', '.') ?>
                    </td>

                    <td>
                      <?php if($row['tipe'] == 'masuk'): ?>
                        <span class="badge bg-success">Masuk</span>
                      <?php else: ?>
                        <span class="badge bg-danger">Keluar</span>
                      <?php endif; ?>
                    </td>

                    <td><?= $row['metode'] ?></td>

                    <td>
                      <a href="<?= base_url('transaksi/edit/'.$row['id']); ?>"
                         class="btn btn-sm btn-warning">
                        <i class="bi bi-pencil"></i>
                      </a>

                     <a href="#" 
                        class="btn btn-sm btn-danger btn-delete"
                        data-url="<?= base_url('transaksi/delete/'.$row['id']); ?>">
                        <i class="bi bi-trash"></i>
                    </a>
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