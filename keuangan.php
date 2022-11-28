<!doctype html>
<html lang="en">
<?php include('./partials/head.php') ?>

<!-- own css -->
<link rel="stylesheet" href="assets/css/kabinet.css">

<body>
    <?php include('./partials/navbar.php') ?>

    <div class="bg-top">
        <img src="assets/img/bg-top.svg" alt="bg-top" loading="lazy">
    </div>

    <section class="divisi">
        <div class="container">
            <div class="text-center nama-divisi d-md-flex align-items-center justify-content-center mx-auto" data-aos="zoom-out">
                <div class="title-divisi">Biro Keuangan</div>
                <img src="assets/img/ppuang.png" alt="Keuangan LOGO" class="img-fluid my-md-auto">
            </div>
            <div class="row justify-content-between my-5">
                <div class="col-md-5">
                    <img src="assets/img/bph-bpi/aisa-gita.webp" alt="aisa-gita" class="img-fluid" data-aos="fade-up">
                    <div class="nama-area bg-primary text-center text-light py-4 shadow">
                        <span class="fw-bold">Aisyatul Afifah</span><br>
                        Kepala Biro Keuangan <br>
                        <br>
                        <span class="fw-bold">Anggita Nurhalizah Yasmin</span><br>
                        Wakil Kepala Biro Keuangan
                    </div>
                </div>
                <div class="col-md-6 mt-md-0 mt-5">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item mb-5 border-0">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                    Deskripsi
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body shadow">
                                    <strong>Biro Keuangan</strong><br>
                                    Biro Keuangan merupakan salah satu supporting system BEM, yang bertanggung jawab penuh dalam mengelola keuangan BEM Fakultas Vokasi UB.
                                    <br><br>
                                    <strong>Tupoksi:</strong><br>
                                    <ul>
                                        <li>mengelola keuangan BEM Vokasi UB</li>
                                        <li>membantu proses pencairan dana untuk berlangsungnya seluruh kegiatan program kerja pada kementerian/biro/unit pada BEM Vokasi UB sekaligus organisasi yang ternaung di dalamnya.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0">
                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    Program Kerja
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="accordion-body shadow bg-white">
                                    <li>Lingkar Admin</li>
                                    <li>Laporan Keuangan</li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- staff -->
    <section class="staff">
        <div class="container align-items-center">
            <div class="text-center">
                <h1 class="title">Staff</h1>
            </div>
            <div class="row text-center justify-content-center">
                <div class="col-11 nama-staff" data-aos="zoom-in-up">
                    Berliana Monika Mayangsari -
                    Diah Evita Sari -
                    Shangrila Imas Kaputri -
                    Angelica Dea Fanny Damanik -
                    Halfa Nurfauziyah Islamiyah Putri -
                    Fanny Anindya Eka Putri Effendy -
                    Eka Bayun Larasati -
                    Hasnaul Afina -
                    Anugrah Senja Puspita Kirana -
                    Ignatia Intan Simarmata -
                    Eurika Efrilia Rotua -
                    Hilderia Febrilyoez Sinaga -
                    Risfani -
                    Muhammad Syauqi Rais
                </div>
            </div>
        </div>
    </section>

    <section class="yuk-kenali my-4">
        <div class="container">
            <div class="text-center">
                <h3><strong>Yuk kenali lebih lanjut!</strong></h3>
                <a href="https://www.youtube.com/watch?v=up0BW9z0gpI&t=12s" class="btn btn-blue mt-3"><i class="fa-brands fa-youtube"></i> Company Profile</a>
            </div>
        </div>
    </section>

    <div class="bg-bawah">
        <img src="assets/img/bg-bottom.svg" alt="" width="100%">
    </div>

    <?php include('./partials/footer.php') ?>


</body>

</html>