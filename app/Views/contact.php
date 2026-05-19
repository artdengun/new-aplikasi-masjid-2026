<?php echo view('_partials/header'); ?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Hubungi Kami</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item">Pages</li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section contact">

    <div class="row gy-4">

      <!-- INFO -->
      <div class="col-xl-5">

        <div class="row">

          <div class="col-md-12">
            <div class="info-box card shadow-sm border-0">
              <i class="bi bi-geo-alt text-primary"></i>
              <h3>Alamat</h3>
              <p>
                Jl. Contoh No.123 <br>
                Bandung, Jawa Barat
              </p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="info-box card shadow-sm border-0">
              <i class="bi bi-envelope text-danger"></i>
              <h3>Email</h3>
              <p>
                admin@website.com<br>
                support@website.com
              </p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="info-box card shadow-sm border-0">
              <i class="bi bi-clock text-success"></i>
              <h3>Jam Operasional</h3>
              <p>
                Senin - Jumat<br>
                08:00 - 17:00
              </p>
            </div>
          </div>

          <!-- WHATSAPP -->
          <div class="col-md-12">
            <div class="card shadow-sm border-0 text-center p-4">
              <i class="bi bi-whatsapp text-success" style="font-size: 50px;"></i>

              <h3 class="mt-3">Chat WhatsApp</h3>

              <p class="mb-3">
                Hubungi kami langsung melalui WhatsApp untuk respon lebih cepat.
              </p>

              <a href="https://wa.me/6281234567890"
                 target="_blank"
                 class="btn btn-success rounded-pill px-4">
                <i class="bi bi-whatsapp"></i> Chat Sekarang
              </a>
            </div>
          </div>

        </div>

      </div>

      <!-- FORM -->
      <div class="col-xl-7">

        <div class="card shadow-sm border-0">
          <div class="card-body p-4">

            <div class="mb-4 text-center">
              <h3 class="fw-bold">Kirim Pesan</h3>
              <p class="text-muted">
                Silahkan isi form di bawah ini untuk menghubungi kami.
              </p>
            </div>

            <form action="<?= base_url('contact/send') ?>" method="post">

              <div class="row gy-3">

                <div class="col-md-6">
                  <label class="form-label">Nama Lengkap</label>
                  <input type="text"
                         name="name"
                         class="form-control"
                         placeholder="Masukkan nama"
                         required>
                </div>

                <div class="col-md-6">
                  <label class="form-label">Email</label>
                  <input type="email"
                         name="email"
                         class="form-control"
                         placeholder="Masukkan email"
                         required>
                </div>

                <div class="col-md-12">
                  <label class="form-label">Subject</label>
                  <input type="text"
                         name="subject"
                         class="form-control"
                         placeholder="Masukkan subject"
                         required>
                </div>

                <div class="col-md-12">
                  <label class="form-label">Pesan</label>
                  <textarea class="form-control"
                            name="message"
                            rows="6"
                            placeholder="Tulis pesan..."
                            required></textarea>
                </div>

                <div class="col-md-12 text-center mt-4">
                  <button type="submit"
                          class="btn btn-primary px-5 rounded-pill">
                    <i class="bi bi-send"></i> Kirim Pesan
                  </button>
                </div>

              </div>

            </form>

          </div>
        </div>

      </div>

    </div>

  </section>

</main><!-- End #main -->

<?php echo view('_partials/footer'); ?>