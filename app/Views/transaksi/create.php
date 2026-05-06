<?php echo view('_partials/header'); ?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Tambah Transaksi</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?= base_url('/dashboard') ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
          <a href="<?= base_url('/transaksi') ?>">Transaksi</a>
        </li>
        <li class="breadcrumb-item active">Tambah</li>
      </ol>
    </nav>
  </div>

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <?php
        $inputs = session()->getFlashdata('inputs') ?? [];
        $errors = session()->getFlashdata('errors');

        if (!empty($errors)) : ?>
          <div class="alert alert-danger">
            <ul>
              <?php foreach ($errors as $error) : ?>
                <li><?= esc($error) ?></li>
              <?php endforeach ?>
            </ul>
          </div>
        <?php endif; ?>

        <div class="card">
          <div class="card-body">

            <h5 class="card-title">Form Transaksi</h5>

            <form action="<?= base_url('transaksi/save'); ?>" method="post" class="form-transaksi">
              <div class="row">

                <!-- LEFT -->
                <div class="col-md-6">

                  <div class="mb-3">
                    <label>Tanggal</label>
                    <input type="date" name="tanggal"
                      value="<?= $inputs['tanggal'] ?? date('Y-m-d'); ?>"
                      class="form-control">
                  </div>

                  <div class="mb-3">
                    <label>Keterangan</label>
                    <input type="text" name="keterangan"
                      value="<?= $inputs['keterangan'] ?? '' ?>"
                      class="form-control"
                      placeholder="Contoh: Infaq Jumat">
                  </div>

                  <div class="mb-3">
                    <label>Kategori</label>
                    <select name="kategori" class="form-control">
                      <option value="">-- Pilih Kategori --</option>
                      <option value="Kotak Amal">Kotak Amal</option>
                      <option value="Infaq Jumat">Infaq Jumat</option>
                      <option value="Zakat">Zakat</option>
                      <option value="Sedekah">Sedekah</option>
                      <option value="Operasional">Operasional</option>
                      <option value="Perbaikan">Perbaikan</option>
                    </select>
                  </div>

                </div>

                <!-- RIGHT -->
                <div class="col-md-6">

                  <div class="mb-3">
                    <label>Jumlah</label>
                    <input type="text" id="jumlah" name="jumlah"
                    class="form-control"
                    placeholder="Contoh: 1.000.000"
                    value="<?= isset($transaksi['jumlah']) ? number_format($transaksi['jumlah'], 0, ',', '.') : '' ?>">
                  </div>

                  <div class="mb-3">
                    <label>Tipe Transaksi</label>
                    <select name="tipe" class="form-control">
                      <option value="">-- Pilih --</option>
                      <option value="masuk">Masuk</option>
                      <option value="keluar">Keluar</option>
                    </select>
                  </div>

                  <div class="mb-3">
                    <label>Metode</label>
                    <select name="metode" class="form-control">
                      <option value="">-- Pilih Metode --</option>
                      <option value="Cash">Cash</option>
                      <option value="Transfer">Transfer</option>
                      <option value="QRIS">QRIS</option>
                    </select>
                  </div>

                </div>

              </div>

              <div class="text-end">
                <a href="<?= base_url('transaksi'); ?>" class="btn btn-secondary">
                  Kembali
                </a>
                <button type="submit" class="btn btn-primary">
                  Simpan
                </button>
              </div>

            </form>

          </div>
        </div>

      </div>
    </div>
  </section>

</main>

<?php echo view('_partials/footer'); ?>