<!doctype html>
<html lang="en">
<?php include('./partials/head.php') ?>


<!-- own css -->
<link rel="stylesheet" href="assets/css/beranda.css">

<!-- carousel -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- counter -->
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>

<!-- counter -->

<body>
    <?php include('./partials/navbar.php') ?>

    <!-- hero -->
    <section class="hero">
        <!-- <div class="circle-hero">
            <img src="assets/img/circle-hero.svg" loading="lazy" alt="circle" class="img-fluid">
        </div> -->
        <div class="container pt-4 pt-lg-5 pt-md-5">
            <div class="row pt-2 pt-lg-3 pt-md-3 mt-5 mt-md-0">
                <div class="col-md-6 col-lg-6 col-12 heading align-items-center my-auto text-center text-md-start">
                    <span>Selamat Datang di Website</span>
                    <h1>BEM Fakultas Vokasi</h1>
                    <h2>Universitas Brawijaya</h2>
                    <span>Kabinet Saskara Gama</span><br><br>
                    <a href="#comprof" class="btn btn-light" data-aos="fade-right">Jelajah Sekarang</a>
                </div>
                <div class="col-md-6 col-lg-6 col-12 gambar mt-5 mt-md-0 mt-lg-0" data-aos="fade-left">
                    <img src="assets/img/pres-wapres.webp" class="img-fluid" loading="lazy" alt="pres-wapres" data-tilt>
                </div>
            </div>
        </div>
    </section>
    <!-- hero -->

    <!-- comprof -->
    <section class="comprof mb-5 mb-md-0" id="comprof">
        <div class="container">
            <div class="text-center bergema mb-5" data-aos="fade-up">
                <div class="logo shadow p-4 my-4">
                    <img src="assets/img/logo-no-foot.svg" class="img-fluid" alt="logo">
                </div>
                <h1>Kabinet Saskara Gama</h1>
                <p>Bergema, Bergerak Seirama!</p>
            </div>
            <div class="row justify-content-between align-items-center bergerak">
                <div class="col-md-5 col-lg-5 col-12 text-center" data-aos="zoom-out-right">
                    <h4>Yuk cari tahu!</h4>
                    <a href="tentang.php" class="btn btn-blue d-block my-3">Filosofi Logo</a>
                    <a href="kepengurusan.php" class="btn btn-blue d-block my-3">Struktur Kabinet</a>
                    <a href="https://issuu.com/bemvokasiub/docs/vokspedia_vol2" class="btn btn-blue d-block my-3">Buku Akhir Tahun</a>
                </div>
                <div class="col-md-6 col-lg-6 col-12 text-center mt-4 mt-md-0 video" data-aos="fade-down-right">
                    <iframe class="video-comprof shadow" src="https://www.youtube.com/embed/up0BW9z0gpI" title="YouTube video player" frameborder="3" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <p>Video Company Profile</p>
                </div>
            </div>
        </div>
    </section>
    <!-- comprof -->

    <!-- pnc -->
    <section class="pnc">
        <div class="container align-items-center">
            <div class="row py-2">
                <div class="text-center pnc-area">
                    <h1 class="title">Partner Kita</h1>
                </div>
            </div>
            <div class="row slider mx-auto justify-content-center text-center">
                <div class=" col-1 partner">
                    <div class="pnc-logo justify-content-center text-center mx-auto">
                        <img src="assets/img/logo-swandudes.svg" class="img-fluid" alt="swandudes">
                    </div>
                    <div class="pnc-name mx-auto text-center">
                        Swandudes
                    </div>
                </div>
                <div class=" col-1 partner">
                    <div class="pnc-logo justify-content-center text-center mx-auto">
                        <img src="assets/img/logo-teko-cafe.svg" class="img-fluid" alt="teko o cafe">
                    </div>
                    <div class="pnc-name mx-auto text-center">
                        Teko'o Cafe
                    </div>
                </div>
                <div class=" col-1 partner">
                    <div class="pnc-logo justify-content-center text-center mx-auto">
                        <img src="assets/img/logo-kara.svg" class="img-fluid" alt="Kara Coffee">
                    </div>
                    <div class="pnc-name mx-auto text-center">
                        Kara Coffee
                    </div>
                </div>
                <div class=" col-1 partner">
                    <div class="pnc-logo justify-content-center text-center mx-auto">
                        <img src="assets/img/logo-dudes.svg" class="img-fluid" alt="Dudes Studio">
                    </div>
                    <div class="pnc-name mx-auto text-center">
                        Dudes Studio
                    </div>
                </div>
                <div class=" col-1 partner">
                    <div class="pnc-logo justify-content-center text-center mx-auto">
                        <img src="assets/img/logo-studio8.svg" class="img-fluid" alt="Studio 8 Photography">
                    </div>
                    <div class="pnc-name mx-auto text-center">
                        Studio 8 Photography
                    </div>
                </div>
                <div class=" col-1 partner">
                    <div class="pnc-logo justify-content-center text-center mx-auto">
                        <img src="assets/img/logo-Progate.svg" class="img-fluid" alt="Progate">
                    </div>
                    <div class="pnc-name mx-auto text-center">
                        Progate
                    </div>
                </div>
                <div class=" col-1 partner">
                    <div class="pnc-logo justify-content-center text-center mx-auto">
                        <img src="assets/img/logo-olpedia.svg" class="img-fluid" alt="Olpedia">
                    </div>
                    <div class=" pnc-name mx-auto text-center">
                        Olpedia
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pnc -->

    <!-- podcast -->
    <section class="podcast">
        <div class="container">
            <div class="text-center">
                <h1 class="title">Podcast</h1>
            </div>
            <div class="row podcast-area">
                <div class="col-md-6" data-aos="fade-right">
                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/episode/36OWW63wnvXHHeqdXRsI94?utm_source=generator" width="100%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <p>Kini selain di youtube, kamu juga bisa nikmatin podcast kami melalui Spotify lohhhh....!!! Pembicaraannya mulai dari yang berat-berat, yang relate sama kondisi mahasiswa, sampai yang receh pun ada. Kepo kan sama obrolan kami? Buruan yuk didengerin!</p>
                    <a href="https://open.spotify.com/show/30r6Cn9c0lR86parpSkh1o" class="btn btn-blue my-3"><i class="fa-brands fa-spotify"></i> Dengarkan Lainnya!</a>
                </div>
            </div>
        </div>
    </section>
    <!-- podcast -->

    <!-- galeri -->
    <section class="galeri">
        <div class="container galeri-area">
            <div class="text-center mb-5">
                <h1 class="title">Galeri</h1>
                <h5>Yuk lihat cerita kami!</h5>
            </div>
            <div id="main-carousel" class="splide" aria-label="Beautiful Images">
                <div class="container">
                    <div class="splide__track row">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <img src="assets/img/abdes.webp" alt="Abdi Desa" loading="lazy">
                            </li>
                            <li class="splide__slide">
                                <img src="assets/img/crea.webp" alt="Creanomic" loading="lazy">
                            </li>
                            <li class="splide__slide">
                                <img src="assets/img/yuwa.webp" alt="Yuwaraja" loading="lazy">
                            </li>
                            <li class="splide__slide">
                                <img src="assets/img/comprof.webp" loading="lazy">
                            </li>
                            <li class="splide__slide">
                                <img src="assets/img/vition.webp" loading="lazy">
                            </li>
                            <li class="splide__slide">
                                <img src="assets/img/pops.webp" loading="lazy">
                            </li>
                            <li class="splide__slide">
                                <img src="assets/img/farewell.webp" loading="lazy">
                            </li>
                            <li class="splide__slide">
                                <img src="assets/img/opsi.jpg" loading="lazy">
                        </ul>
                    </div>
                </div>
            </div>
            <div id="thumbnail-carousel" class="splide galeri" aria-label="The carousel with thumbnails. Selecting a thumbnail will change the Beautiful Gallery carousel.">
                <div class="container">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <img src="assets/img/abdes.webp" alt="Abdi Desa" loading="lazy">
                            </li>
                            <li class="splide__slide">
                                <img src="assets/img/crea.webp" alt="Creanomic" loading="lazy">
                            </li>
                            <li class="splide__slide">
                                <img src="assets/img/yuwa.webp" alt="Yuwaraja" loading="lazy">
                            </li>
                            <li class="splide__slide">
                                <img src="assets/img/comprof.webp" loading="lazy">
                            </li>
                            <li class="splide__slide">
                                <img src="assets/img/vition.webp" loading="lazy">
                            </li>
                            <li class="splide__slide">
                                <img src="assets/img/pops.webp" loading="lazy">
                            </li>
                            <li class="splide__slide">
                                <img src="assets/img/farewell.webp" loading="lazy">
                            </li>
                            <li class="splide__slide">
                                <img src="assets/img/opsi.jpg" loading="lazy">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- galeri -->

    <!-- rekap -->
    <section class="recap">
        <div class="bg-footer">
            <div class="container recap-area">
                <div class="row counters-up">
                    <div class="mt-5 mt-md-0 col-md-3 col-6 text-center justify-content-center">
                        <div class="circle mx-auto my-auto counters">
                            68
                        </div>
                        <div class="icon mx-auto">
                            <i class="fa-solid fa-business-time"></i>
                        </div>
                        <div class="keterangan mx-auto">
                            Program Kerja
                        </div>
                    </div>
                    <div class="mt-5 mt-md-0 col-md-3 col-6 text-center justify-content-center">
                        <div class="circle mx-auto my-auto counters">
                            9
                        </div>
                        <div class="icon mx-auto">
                            <i class="fa-solid fa-book-open-reader"></i>
                        </div>
                        <div class="keterangan mx-auto">
                            Kementerian
                        </div>
                    </div>
                    <div class="mt-5 mt-md-0 col-md-3 col-6 text-center justify-content-center">
                        <div class="circle mx-auto my-auto counters">
                            4
                        </div>
                        <div class="icon mx-auto">
                            <i class="fa-solid fa-file-lines"></i>
                        </div>
                        <div class="keterangan mx-auto">
                            Biro dan Badan
                        </div>
                    </div>
                    <div class="mt-5 mt-md-0 col-md-3 col-6 text-center justify-content-center">
                        <div class="circle mx-auto my-auto counters">
                            195
                        </div>
                        <div class="icon mx-auto">
                            <i class="fa-solid fa-users"></i>
                        </div>
                        <div class="keterangan mx-auto">
                            SDM
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include('./partials/footer.php') ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $('.slider').slick({
            dots: true,
            infinite: true,
            centerMode: true,
            centerPadding: '0px',
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 700,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var mains = new Splide('#main-carousel', {
                type: 'fade',
                rewind: true,
                perPage: 1,
                heightRatio: 0.5,
                pagination: true,
                arrows: false,
                cover: true,
            });


            var thumbnails = new Splide('#thumbnail-carousel', {
                fixedWidth: 100,
                fixedHeight: 60,
                gap: 10,
                focus: 'center',
                rewind: true,
                pagination: false,
                isNavigation: true,
                cover: true,
                dragMinThreshold: {
                    mouse: 4,
                    touch: 10,
                },
                breakpoints: {
                    600: {
                        fixedWidth: 60,
                        fixedHeight: 44,
                    },
                },
            });
            mains.sync(thumbnails);
            mains.mount();
            thumbnails.mount();
        });
    </script>

    <!-- counter -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script>
        // $(document).ready(function() {
        //     $(".counter").counterUp({
        //         delay: 10,
        //         time: 1000,
        //     });
        // });
        jQuery(document).ready(function($) {
            $('.counters').counterUp({
                delay: 10,
                time: 1000
            });
        });
    </script>
    <!-- counter  -->

    <!-- 3d tilt -->
    <script type="text/javascript" src="assets/js/vanilla-tilt.min.js"></script>
</body>

</html>