<?php echo view('_partials/header'); ?>

<div class="main">
  <div class="pagetitle text-center">
    <h1>Edit Transaksi</h1>
    <nav>
      <ol class="breadcrumb justify-content-center">
        <li class="breadcrumb-item">
          <a href="<?= base_url('/dashboard') ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
          <a href="<?= base_url('/transaksi') ?>">Transaksi</a>
        </li>
        <li class="breadcrumb-item active">Edit</li>
      </ol>
    </nav>
  </div>

  <section class="section">
    <div class="row justify-content-center">
      <div class="col-lg-8">

        <div class="card">
          <div class="card-body">

            <h5 class="card-title">Form Edit Transaksi</h5>

            <?php if(session('errors')): ?>
              <div class="alert alert-danger">
                <?php foreach(session('errors') as $e): ?>
                  <div><?= $e ?></div>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>
          <form action="<?= base_url('transaksi/save'); ?>" method="post" class="form-transaksi">
              <!-- 🔥 WAJIB -->
              <input type="hidden" name="id" value="<?= $transaksi['id']; ?>">

              <div class="row">

                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="form-label">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control"
                           value="<?= $transaksi['tanggal']; ?>">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="form-label">Jumlah</label>
                    <input type="text" id="jumlah" name="jumlah" placeholder="Contoh: 1.000.000" class="form-control" value="<?= isset($transaksi['jumlah']) ? number_format($transaksi['jumlah'], 0, ',', '.') : '' ?>">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="mb-3">
                    <label class="form-label">Keterangan</label>
                    <input type="text" name="keterangan" class="form-control"
                           value="<?= $transaksi['keterangan']; ?>">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="form-label">Kategori</label>
                    <select name="kategori" class="form-control">
                      <option value="">Pilih</option>
                      <option <?= $transaksi['kategori']=='INFAQ'?'selected':'' ?> value="INFAQ">INFAQ</option>
                      <option <?= $transaksi['kategori']=='ZAKAT'?'selected':'' ?> value="ZAKAT">ZAKAT</option>
                      <option <?= $transaksi['kategori']=='SEDEKAH'?'selected':'' ?> value="SEDEKAH">SEDEKAH</option>
                      <option <?= $transaksi['kategori']=='WAKAF'?'selected':'' ?> value="WAKAF">WAKAF</option>
                      <option <?= $transaksi['kategori']=='OPERASIONAL'?'selected':'' ?> value="OPERASIONAL">OPERASIONAL</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="form-label">Tipe</label>
                    <select name="tipe" class="form-control">
                      <option value="">Pilih</option>
                      <option <?= $transaksi['tipe']=='masuk'?'selected':'' ?> value="masuk">Masuk</option>
                      <option <?= $transaksi['tipe']=='keluar'?'selected':'' ?> value="keluar">Keluar</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="mb-3">
                    <label class="form-label">Metode</label>
                    <select name="metode" class="form-control">
                      <option value="">Pilih</option>
                      <option <?= $transaksi['metode']=='Cash'?'selected':'' ?> value="Cash">Cash</option>
                      <option <?= $transaksi['metode']=='Transfer'?'selected':'' ?> value="Transfer">Transfer</option>
                      <option <?= $transaksi['metode']=='QRIS'?'selected':'' ?> value="QRIS">QRIS</option>
                    </select>
                  </div>
                </div>

              </div>

              <div class="text-end">
                <a href="<?= base_url('transaksi'); ?>" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary">Update</button>
              </div>

            </form>

          </div>
        </div>

      </div>
    </div>
  </section>
</div>

<?php echo view('_partials/footer'); ?>