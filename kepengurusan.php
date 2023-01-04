<?php
$kepengurusan = [
    [
        'title1' => 'Presiden',
        'title2' => 'Wakil Presiden',
        'gambar' => 'foto_presi.webp',
        'link'   => 'presiden.php'
    ],
    [
        'title1' => 'Menteri',
        'title2' => 'Koordinator',
        'gambar' => 'menko.webp',
        'link'   => 'menko.php'
    ],
    [
        'title1' => '.',
        'title2' => 'BJMO',
        'gambar' => 'bjmo.webp',
        'link'   => 'bjmo.php'
    ],
    [
        'title1' => 'Biro',
        'title2' => 'Administrasi',
        'gambar' => 'administrasi.webp',
        'link'   => 'admin.php'
    ],
    [
        'title1' => 'Biro',
        'title2' => 'Keuangan',
        'gambar' => 'keuangan.webp',
        'link'   => 'keuangan.php'
    ],
    [
        'title1' => 'Biro',
        'title2' => 'PUSKOMINFO',
        'gambar' => 'puskom.webp',
        'link'   => 'puskominfo.php'
    ],
    [
        'title1' => 'Kementerian',
        'title2' => 'PSDM',
        'gambar' => 'psdm.webp',
        'link'   => 'psdm.php'
    ],
    [
        'title1' => 'Kementerian',
        'title2' => 'PORA',
        'gambar' => 'pora.webp',
        'link'   => 'pora.php'
    ],
    [
        'title1' => 'Kementerian',
        'title2' => 'ADVOKESMA',
        'gambar' => 'advo.webp',
        'link'   => 'advokesma.php'
    ],
    [
        'title1' => 'Kementerian',
        'title2' => 'SOSMA',
        'gambar' => 'sosma.webp',
        'link'   => 'sosma.php'
    ],
    [
        'title1' => 'Kementerian',
        'title2' => 'KASTRAT',
        'gambar' => 'kastrat.webp',
        'link'   => 'kastrat.php'
    ],
    [
        'title1' => 'Kementerian',
        'title2' => 'Perhubungan',
        'gambar' => 'perhub.webp',
        'link'   => 'perhubungan.php'
    ],
];
?>
<!doctype html>
<html lang="en">
<?php include('./partials/head.php') ?>

<!-- own css -->
<link rel="stylesheet" href="assets/css/kepengurusan.css">

<body>
    <?php include('./partials/navbar.php') ?>

    <section id="hero">
        <div class="bg-top">
            <img src="assets/img/bg-top-ts.svg" alt="bg-top" loading="lazy">
        </div>
        <div class="container pt-4 pt-lg-5 pt-md-5">
            <div class="row pt-2 pt-lg-3 pt-md-3 mt-5 mt-md-0">
                <div class="col-md-12 col-lg-12 col-12 heading align-items-center my-auto text-center">
                    <h1>Kabinet Saskara Gama</h1>
                    <h2>Bergema, Bergerak, Seirama</h2>
                    <a class="btn btn-light" href="#struktur" data-aos="fade-right">Kenali Kami</a>
                </div>
            </div>
        </div>
    </section>

    <section id="struktur" data-bs-spy="scroll" class="scrollspy-example">
        <div class="container">
            <div class="row">
                <div class="text-center nama-divisi d-md-flex align-items-center justify-content-center mx-auto" data-aos="zoom-out">
                    <div class="title-divisi">Struktur</div>
                </div>
            </div>
            <div class="row">
                <img src="assets/img/struktur.svg" alt="">
            </div>
        </div>
    </section>

    <section id="kepengurusan">
        <div class="container align-items-center">
            <div class="text-center">
                <h1 class="title">Kepengurusan</h1>
            </div>
            <div class="text-center sub">
                <h1 class="sub-title">Kabinet Saskara Gama</h1>
            </div>
            <div class="row">
                <?php foreach ($kepengurusan as $k) { ?>
                    <div class="col-lg-4 p-5">
                        <div class="kepengurusan-card bg-transparent">
                            <div class="header-card p-4 d-flex align-items-center flex-column position-relative ">
                                <img class="main-img" src="assets/img/kepengurusan/<?= $k['gambar'] ?>" alt="<?= $k['title1'].$k['title2'] ?>" loading="lazy">
                                <div class="circle-link d-flex align-items-center justify-content-center p-3 position-absolute bottom-0">
                                    <div class="sub-circle-link p-1">
                                        <a href="<?= $k['link'] ?>">
                                            <img src="assets/img/arrow.svg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="body-card">
                                <h1><?= $k['title1'] ?></h1>
                                <h1><?= $k['title2'] ?></h1>
                            </div>
                        </div>
                    </div>
                <?php } ?>


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