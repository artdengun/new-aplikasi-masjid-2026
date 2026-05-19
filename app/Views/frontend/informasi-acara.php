<?php echo view('frontend/_partials/head'); ?>

<main class="main">

    <!-- ===== PAGE TITLE ===== -->
    <div class="page-title dark-background" data-aos="fade"
        style="background-image: url(assets/img/ui/background_header.jpg);">

        <div class="container position-relative">

            <h1>
                Informasi Acara Masjid
            </h1>

            <p class="text-white mt-2">
                Informasi kajian, pengajian, kegiatan dakwah, dan acara terbaru Masjid Al Hikmah
            </p>

            <nav class="breadcrumbs">
                <ol>
                    <li>
                        <a href="<?= base_url('/'); ?>">
                            Halaman Utama
                        </a>
                    </li>

                    <li class="current">
                        Informasi Acara
                    </li>
                </ol>
            </nav>

        </div>

    </div>
    <!-- END PAGE TITLE -->


    <!-- ===== EVENT SECTION ===== -->
    <section id="blog-posts-2" class="blog-posts-2 section py-5">

        <div class="container">

            <!-- ===== HEADER ===== -->
            <div class="row mb-5">

                <div class="col-lg-8">

                    <div class="section-title">

                        <span class="badge bg-success px-3 py-2 mb-3">
                            <i class="bi bi-calendar-event me-1"></i>
                            Event & Dakwah
                        </span>

                        <h2 class="fw-bold">
                            Kegiatan & Acara Masjid
                        </h2>

                        <p class="text-muted mt-3">
                            Dokumentasi kegiatan dakwah, pengajian,
                            ceramah islami, dan aktivitas jamaah
                            Masjid Al Hikmah.
                        </p>

                    </div>

                </div>

                <div class="col-lg-4">

                    <!-- SEARCH -->
                    <div class="card border-0 shadow-sm">

                        <div class="card-body p-3">

                            <label class="form-label fw-semibold">
                                Cari Acara
                            </label>

                            <input type="text"
                                id="searchEvent"
                                class="form-control"
                                placeholder="Cari kegiatan...">

                        </div>

                    </div>

                </div>

            </div>
            <!-- END HEADER -->


            <!-- ===== LIST EVENT ===== -->
            <div class="row gy-4" id="eventContainer">

                <!-- ITEM -->
                <div class="col-lg-4 col-md-6 event-item">

                    <article class="card border-0 shadow-sm overflow-hidden h-100 hover-card">

                        <div class="position-relative overflow-hidden">

                            <img src="<?= base_url('assets/logo/brand.png'); ?>"
                                class="img-fluid w-100"
                                style="height:240px; object-fit:cover;"
                                alt="">

                            <div class="position-absolute top-0 end-0 m-3">

                                <span class="badge bg-danger">

                                    <i class="bi bi-youtube"></i>
                                    Video

                                </span>

                            </div>

                        </div>

                        <div class="card-body d-flex flex-column">

                            <div class="d-flex align-items-center text-muted small mb-3">

                                <div class="me-3">
                                    <i class="bi bi-calendar-event me-1"></i>
                                    09 Oktober 2022
                                </div>

                                <div>
                                    <i class="bi bi-person me-1"></i>
                                    Admin
                                </div>

                            </div>

                            <span class="badge bg-success-subtle text-success mb-3">

                                Forum Fs3G

                            </span>

                            <h5 class="fw-bold mb-3">

                                KH Dr Mulyadi Effendi MA | Fs3G di Masjid Al Hikmah Payangan

                            </h5>

                            <p class="text-muted small flex-grow-1">

                                Kajian islami bersama KH Dr Mulyadi Effendi MA
                                dalam acara Forum Fs3G di Masjid Al Hikmah.

                            </p>

                            <a href="https://www.youtube.com/watch?v=n2PPfB813EQ&pp=ygUSYWwgaGlrbWFoIHBheWFuZ2Fu"
                                target="_blank"
                                class="btn btn-success mt-3">

                                <i class="bi bi-play-circle me-1"></i>
                                Lihat Acara

                            </a>

                        </div>

                    </article>

                </div>


                <!-- ITEM -->
                <div class="col-lg-4 col-md-6 event-item">

                    <article class="card border-0 shadow-sm overflow-hidden h-100 hover-card">

                        <div class="position-relative overflow-hidden">

                            <img src="<?= base_url('assets/logo/brand.png'); ?>"
                                class="img-fluid w-100"
                                style="height:240px; object-fit:cover;"
                                alt="">

                            <div class="position-absolute top-0 end-0 m-3">

                                <span class="badge bg-primary">

                                    <i class="bi bi-camera-video"></i>
                                    Kajian

                                </span>

                            </div>

                        </div>

                        <div class="card-body d-flex flex-column">

                            <div class="d-flex align-items-center text-muted small mb-3">

                                <div class="me-3">
                                    <i class="bi bi-calendar-event me-1"></i>
                                    09 Oktober 2022
                                </div>

                                <div>
                                    <i class="bi bi-person me-1"></i>
                                    Admin
                                </div>

                            </div>

                            <span class="badge bg-info-subtle text-info mb-3">

                                Kajian Islam

                            </span>

                            <h5 class="fw-bold mb-3">

                                Ust H Fajar Maulana Spdi | Fs3G di Masjid Al Hikmah Payangan

                            </h5>

                            <p class="text-muted small flex-grow-1">

                                Ceramah dan tausiyah islami bersama
                                Ustadz H Fajar Maulana Spdi.

                            </p>

                            <a href="https://www.youtube.com/watch?v=tv1xaBGr9VQ&pp=ygUSYWwgaGlrbWFoIHBheWFuZ2Fu"
                                target="_blank"
                                class="btn btn-primary mt-3">

                                <i class="bi bi-play-circle me-1"></i>
                                Lihat Acara

                            </a>

                        </div>

                    </article>

                </div>


                <!-- ITEM -->
                <div class="col-lg-4 col-md-6 event-item">

                    <article class="card border-0 shadow-sm overflow-hidden h-100 hover-card">

                        <div class="position-relative overflow-hidden">

                            <img src="<?= base_url('assets/logo/brand.png'); ?>"
                                class="img-fluid w-100"
                                style="height:240px; object-fit:cover;"
                                alt="">

                            <div class="position-absolute top-0 end-0 m-3">

                                <span class="badge bg-warning text-dark">

                                    <i class="bi bi-mic"></i>
                                    Dakwah

                                </span>

                            </div>

                        </div>

                        <div class="card-body d-flex flex-column">

                            <div class="d-flex align-items-center text-muted small mb-3">

                                <div class="me-3">
                                    <i class="bi bi-calendar-event me-1"></i>
                                    09 Oktober 2022
                                </div>

                                <div>
                                    <i class="bi bi-person me-1"></i>
                                    Admin
                                </div>

                            </div>

                            <span class="badge bg-warning-subtle text-dark mb-3">

                                Ceramah

                            </span>

                            <h5 class="fw-bold mb-3">

                                MC Fs3G di Masjid Al Hikmah Payangan

                            </h5>

                            <p class="text-muted small flex-grow-1">

                                Dokumentasi pembukaan acara, MC kegiatan,
                                dan doa penutup bersama jamaah.

                            </p>

                            <a href="https://www.youtube.com/watch?v=LD63pnAeLLg&t=14s&pp=ygUSYWwgaGlrbWFoIHBheWFuZ2Fu"
                                target="_blank"
                                class="btn btn-warning text-dark mt-3">

                                <i class="bi bi-play-circle me-1"></i>
                                Lihat Acara

                            </a>

                        </div>

                    </article>

                </div>

            </div>
            <!-- END LIST EVENT -->


            <!-- ===== EMPTY STATE ===== -->
            <div id="emptyEvent"
                class="text-center py-5 d-none">

                <i class="bi bi-search fs-1 text-muted d-block mb-3"></i>

                <h5>
                    Acara tidak ditemukan
                </h5>

                <p class="text-muted">
                    Coba gunakan kata kunci lain
                </p>

            </div>

        </div>

    </section>
    <!-- END EVENT SECTION -->

</main>

<?php echo view('frontend/_partials/footer'); ?>


<style>
.hover-card{
    transition:all .3s ease;
}

.hover-card:hover{
    transform:translateY(-8px);
}

.section-title h2{
    font-size:36px;
}
</style>


<script>
document.getElementById('searchEvent')
.addEventListener('keyup', function(){

    let keyword = this.value.toLowerCase();

    let items = document.querySelectorAll('.event-item');

    let found = false;

    items.forEach(item => {

        let text = item.innerText.toLowerCase();

        if(text.includes(keyword)){

            item.style.display = 'block';
            found = true;

        }else{

            item.style.display = 'none';

        }

    });

    document.getElementById('emptyEvent')
        .classList.toggle('d-none', found);

});
</script>