```php
<?php echo view('_partials/header'); ?>

<main id="main" class="main">

  <!-- ======= PAGE TITLE ======= -->
  <div class="pagetitle">
    <h1>Tambah Transaksi</h1>

    <nav>
      <ol class="breadcrumb">

        <li class="breadcrumb-item">
          <a href="<?= base_url('/dashboard') ?>">
            Dashboard
          </a>
        </li>

        <li class="breadcrumb-item">
          <a href="<?= base_url('/transaksi') ?>">
            Transaksi
          </a>
        </li>

        <li class="breadcrumb-item active">
          Tambah
        </li>

      </ol>
    </nav>
  </div>
  <!-- End Page Title -->


  <!-- ======= SECTION ======= -->
  <section class="section">

    <div class="row">

      <div class="col-lg-12">

        <div class="card">

          <div class="card-body">

            <h5 class="card-title">
              Form Tambah Transaksi
            </h5>

            <!-- FORM -->
            <form action="<?= base_url('transaksi/save'); ?>"
                  method="post"
                  class="form-transaksi">

              <div class="row">

                <!-- LEFT -->
                <div class="col-md-6">

                  <!-- TANGGAL -->
                  <div class="mb-3">

                    <label class="form-label">
                      Tanggal
                    </label>

                    <input type="date"
                           name="tanggal"
                           value="<?= old('tanggal', date('Y-m-d')); ?>"
                           class="form-control"
                           required>

                  </div>


                  <!-- KETERANGAN -->
                  <div class="mb-3">

                    <label class="form-label">
                      Keterangan
                    </label>

                    <input type="text"
                           name="keterangan"
                           value="<?= old('keterangan'); ?>"
                           class="form-control"
                           placeholder="Contoh: Infaq Jumat"
                           required>

                  </div>


                  <!-- KATEGORI -->
                  <div class="mb-3">

                    <label class="form-label">
                      Kategori
                    </label>

                    <select name="kategori"
                            class="form-select"
                            required>

                      <option value="">
                        -- Pilih Kategori --
                      </option>

                      <option value="Kotak Amal">
                        Kotak Amal
                      </option>

                      <option value="Infaq Jumat">
                        Infaq Jumat
                      </option>

                      <option value="Zakat">
                        Zakat
                      </option>

                      <option value="Sedekah">
                        Sedekah
                      </option>

                      <option value="Operasional">
                        Operasional
                      </option>

                      <option value="Perbaikan">
                        Perbaikan
                      </option>

                    </select>

                  </div>

                </div>
                <!-- END LEFT -->


                <!-- RIGHT -->
                <div class="col-md-6">

                  <!-- JUMLAH -->
                  <div class="mb-3">

                    <label class="form-label">
                      Jumlah
                    </label>

                    <input type="text"
                           id="jumlah"
                           name="jumlah"
                           class="form-control"
                           placeholder="Contoh: 1.000.000"
                           value="<?= old('jumlah'); ?>"
                           autocomplete="off"
                           required>

                    <small class="text-muted">
                      Gunakan nominal tanpa simbol Rp
                    </small>

                  </div>


                  <!-- TIPE -->
                  <div class="mb-3">

                    <label class="form-label">
                      Tipe Transaksi
                    </label>

                    <select name="tipe"
                            class="form-select"
                            required>

                      <option value="">
                        -- Pilih Tipe --
                      </option>

                      <option value="masuk">
                        Masuk
                      </option>

                      <option value="keluar">
                        Keluar
                      </option>

                    </select>

                  </div>


                  <!-- METODE -->
                  <div class="mb-3">

                    <label class="form-label">
                      Metode Pembayaran
                    </label>

                    <select name="metode"
                            class="form-select"
                            required>

                      <option value="">
                        -- Pilih Metode --
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
                <!-- END RIGHT -->

              </div>


              <!-- BUTTON -->
              <div class="text-end mt-3">

                <a href="<?= base_url('transaksi'); ?>"
                   class="btn btn-secondary">

                  <i class="bi bi-arrow-left"></i>
                  Kembali

                </a>

                <button type="submit"
                        class="btn btn-primary">

                  <i class="bi bi-save"></i>
                  Simpan Transaksi

                </button>

              </div>
              <!-- END BUTTON -->


            </form>
            <!-- END FORM -->

          </div>

        </div>

      </div>

    </div>

  </section>
  <!-- End SECTION -->

</main>

<?php echo view('_partials/footer'); ?>