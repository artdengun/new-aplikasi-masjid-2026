<?php echo view('frontend/_partials/head'); ?>

<style>
.contact .info {
    background: #fff;
    padding: 35px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    height: 100%;
}

.contact .info h3 {
    font-size: 28px;
    font-weight: 700;
    color: #198754;
    margin-bottom: 15px;
}

.contact .info-item {
    margin-top: 30px;
}

.contact .info-item i {
    font-size: 22px;
    color: #fff;
    width: 55px;
    height: 55px;
    background: linear-gradient(135deg, #198754, #36d17c);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 15px;
    flex-shrink: 0;
}

.contact .info-item h4 {
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 5px;
}

.contact .php-email-form {
    background: #fff;
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
}

.contact .php-email-form .form-control {
    border-radius: 12px;
    border: 1px solid #ddd;
    height: 50px;
    padding: 10px 15px;
}

.contact .php-email-form textarea.form-control {
    height: 160px;
}

.contact .php-email-form .form-control:focus {
    border-color: #198754;
    box-shadow: none;
}

.contact .php-email-form button {
    background: linear-gradient(135deg, #198754, #36d17c);
    border: 0;
    padding: 12px 35px;
    color: #fff;
    border-radius: 50px;
    transition: 0.3s;
    font-weight: 600;
}

.contact .php-email-form button:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(25, 135, 84, 0.25);
}

.maps-box {
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
}

.wa-button {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-top: 15px;
    padding: 10px 22px;
    border-radius: 50px;
    background: #25D366;
    color: #fff;
    text-decoration: none;
    font-weight: 600;
    transition: 0.3s;
}

.wa-button:hover {
    background: #1ebe5d;
    color: #fff;
    transform: translateY(-2px);
}

.page-title h1 {
    font-weight: 700;
}
</style>

<main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade"
        style="background-image: url(<?= base_url('assets/img/ui/background_header.jpg'); ?>);">

        <div class="container position-relative">

            <h1>Kontak Masjid</h1>

            <nav class="breadcrumbs">
                <ol>
                    <li>
                        <a href="<?= base_url('/'); ?>">
                            Halaman Utama
                        </a>
                    </li>

                    <li class="current">Kontak</li>
                </ol>
            </nav>

        </div>

    </div>
    <!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- GOOGLE MAP -->
        <div class="container mb-5" data-aos="zoom-in">

            <div class="maps-box">
                <iframe style="width: 100%; height: 400px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126914.89113571603!2d106.8114953890625!3d-6.251825576619191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699317aa01af1b%3A0x746cd3f7443aa4d3!2sMasjid%20Al-Hikmah!5e0!3m2!1sid!2sid!4v1737261169119!5m2!1sid!2sid"
                    frameborder="0" allowfullscreen="">
                </iframe>
            </div>

        </div>
        <!-- End Google Maps -->

        <div class="container" data-aos="fade-up">

            <div class="row gy-5 gx-lg-5">

                <!-- LEFT INFO -->
                <div class="col-lg-4">

                    <div class="info">

                        <h3>Hubungi Kami</h3>

                        <p>
                            Silahkan menghubungi admin
                            Masjid Al-Hikmah Payangan
                            melalui email ataupun WhatsApp.
                        </p>

                        <!-- ADDRESS -->
                        <div class="info-item d-flex">

                            <i class="bi bi-geo-alt"></i>

                            <div>
                                <h4>Alamat</h4>

                                <p>
                                    Jl. Wibawa Mukti II Jl. Diman,
                                    RT.004/RW.006, Jatisari,
                                    Kec. Jatiasih, Kota Bekasi,
                                    Jawa Barat 17426
                                </p>
                            </div>

                        </div>

                        <!-- EMAIL -->
                        <div class="info-item d-flex">

                            <i class="bi bi-envelope"></i>

                            <div>
                                <h4>Email</h4>

                                <p>
                                    masjidalhikmahpayangan@gmail.com
                                </p>
                            </div>

                        </div>

                        <!-- PHONE -->
                        <div class="info-item d-flex">

                            <i class="bi bi-phone"></i>

                            <div>

                                <h4>Kontak</h4>

                                <p class="mb-2">
                                    <b>Kontak 1 :</b>
                                    +62 857 1696 7806
                                </p>

                                <p>
                                    <b>Kontak 2 :</b>
                                    +62 822 6199 4978
                                </p>

                                <!-- BUTTON WA -->
                                <a href="https://wa.me/6285716967806?text=Assalamualaikum%20Admin%20Masjid%20Al-Hikmah"
                                    target="_blank" class="wa-button">

                                    <i class="bi bi-whatsapp"></i>
                                    Chat WhatsApp

                                </a>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- CONTACT FORM -->
                <div class="col-lg-8">

                    <form action="<?= base_url('contact/send'); ?>" method="post" class="php-email-form">

                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Masukan Nama Anda"
                                    required>
                            </div>

                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control" placeholder="Masukan Email Anda"
                                    required>
                            </div>

                            <div class="col-12">
                                <input type="text" name="subject" class="form-control" placeholder="Judul Email"
                                    required>
                            </div>

                            <div class="col-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Pesan Email ..."
                                    required></textarea>
                            </div>

                            <!-- ALERT -->
                            <div class="col-12">

                                <?php if(session()->getFlashdata('success')) : ?>

                                <div class="alert alert-success">
                                    <?= session()->getFlashdata('success'); ?>
                                </div>

                                <?php endif; ?>

                                <?php if(session()->getFlashdata('error')) : ?>

                                <div class="alert alert-danger">
                                    <?= session()->getFlashdata('error'); ?>
                                </div>

                                <?php endif; ?>

                            </div>

                            <!-- BUTTON -->
                            <div class="col-12 text-center">

                                <button type="submit">

                                    <i class="bi bi-send"></i>
                                    Kirim Email

                                </button>

                            </div>

                        </div>

                    </form>

                </div>
                <!-- End Contact Form -->

            </div>

        </div>

    </section>
    <!-- /Contact Section -->

</main>

<?php echo view('frontend/_partials/footer'); ?>