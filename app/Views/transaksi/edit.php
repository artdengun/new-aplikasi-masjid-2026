<?php echo view('_partials/header'); ?>

<main id="main" class="main">

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

        <div class="card shadow-sm">

          <div class="card-body">

            <h5 class="card-title">
              Form Edit Transaksi
            </h5>

            <?php if(session('errors')): ?>
              <div class="alert alert-danger">
                <?php foreach(session('errors') as $e): ?>
                  <div><?= $e ?></div>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>

            <form 
              action="<?= base_url('transaksi/save'); ?>" 
              method="post"
              class="form-transaksi"
            >

              <!-- ID -->
              <input 
                type="hidden" 
                name="id" 
                value="<?= $transaksi['id']; ?>"
              >

              <div class="row">

                <!-- TANGGAL -->
                <div class="col-md-6">
                  <div class="mb-3">

                    <label class="form-label">
                      Tanggal
                    </label>

                    <input 
                      type="date"
                      name="tanggal"
                      class="form-control"
                      value="<?= $transaksi['tanggal']; ?>"
                      required
                    >

                  </div>
                </div>

                <!-- JUMLAH -->
                <div class="col-md-6">
                  <div class="mb-3">

                    <label class="form-label">
                      Jumlah
                    </label>

                    <input 
                      type="text"
                      id="jumlah"
                      name="jumlah"
                      class="form-control"
                      placeholder="Contoh: 1.000.000"
                      autocomplete="off"
                      value="<?= number_format($transaksi['jumlah'], 0, ',', '.'); ?>"
                      required
                    >

                  </div>
                </div>

                <!-- KETERANGAN -->
                <div class="col-md-12">
                  <div class="mb-3">

                    <label class="form-label">
                      Keterangan
                    </label>

                    <input 
                      type="text"
                      name="keterangan"
                      class="form-control"
                      placeholder="Contoh: Pembelian Karpet Masjid"
                      value="<?= $transaksi['keterangan']; ?>"
                      required
                    >

                  </div>
                </div>

                <!-- KATEGORI -->
                <div class="col-md-6">
                  <div class="mb-3">

                    <label class="form-label">
                      Kategori
                    </label>

                    <select 
                      name="kategori" 
                      class="form-select"
                      required
                    >

                      <option value="">-- Pilih Kategori --</option>

                      <option 
                        <?= $transaksi['kategori']=='Kotak Amal' ? 'selected' : '' ?>
                        value="Kotak Amal"
                      >
                        Kotak Amal
                      </option>

                      <option 
                        <?= $transaksi['kategori']=='Infaq Jumat' ? 'selected' : '' ?>
                        value="Infaq Jumat"
                      >
                        Infaq Jumat
                      </option>

                      <option 
                        <?= $transaksi['kategori']=='Zakat' ? 'selected' : '' ?>
                        value="Zakat"
                      >
                        Zakat
                      </option>

                      <option 
                        <?= $transaksi['kategori']=='Sedekah' ? 'selected' : '' ?>
                        value="Sedekah"
                      >
                        Sedekah
                      </option>

                      <option 
                        <?= $transaksi['kategori']=='Operasional' ? 'selected' : '' ?>
                        value="Operasional"
                      >
                        Operasional
                      </option>

                      <option 
                        <?= $transaksi['kategori']=='Perbaikan' ? 'selected' : '' ?>
                        value="Perbaikan"
                      >
                        Perbaikan
                      </option>

                    </select>

                  </div>
                </div>

                <!-- TIPE -->
                <div class="col-md-6">
                  <div class="mb-3">

                    <label class="form-label">
                      Tipe Transaksi
                    </label>

                    <select 
                      name="tipe" 
                      class="form-select"
                      required
                    >

                      <option value="">-- Pilih Tipe --</option>

                      <option 
                        <?= $transaksi['tipe']=='masuk' ? 'selected' : '' ?>
                        value="masuk"
                      >
                        Masuk
                      </option>

                      <option 
                        <?= $transaksi['tipe']=='keluar' ? 'selected' : '' ?>
                        value="keluar"
                      >
                        Keluar
                      </option>

                    </select>

                  </div>
                </div>

                <!-- METODE -->
                <div class="col-md-12">
                  <div class="mb-3">

                    <label class="form-label">
                      Metode Pembayaran
                    </label>

                    <select 
                      name="metode" 
                      class="form-select"
                      required
                    >

                      <option value="">-- Pilih Metode --</option>

                      <option 
                        <?= $transaksi['metode']=='Cash' ? 'selected' : '' ?>
                        value="Cash"
                      >
                        Cash
                      </option>

                      <option 
                        <?= $transaksi['metode']=='Transfer' ? 'selected' : '' ?>
                        value="Transfer"
                      >
                        Transfer
                      </option>

                      <option 
                        <?= $transaksi['metode']=='QRIS' ? 'selected' : '' ?>
                        value="QRIS"
                      >
                        QRIS
                      </option>

                    </select>

                  </div>
                </div>

              </div>

              <div class="text-end">

                <a 
                  href="<?= base_url('transaksi'); ?>" 
                  class="btn btn-secondary"
                >
                  Kembali
                </a>

                <button 
                  type="submit"
                  class="btn btn-primary btn-save"
                >
                  <i class="bi bi-save"></i>
                  Update Data
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