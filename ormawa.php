<!doctype html>
<html lang="en">
<?php include('./partials/head.php') ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="assets/css/ormawa.css">
<body>
    <?php include('./partials/navbar.php') ?>

    <!-- ormawa -->
    <section class="top">
        <div class="container d-flex justify-content-center align-items-center">
        <div class="mx-auto bg-info my-auto ormawa">OR<span class="ma">MA</span>WA</div>
            <!-- <img src="assets/img/bg-top-ormawa.svg" loading="lazy" alt="bg-top" class="img-fluid"> -->
                
        </div>
    </section>

    <!-- konten 1 -->
    <section class="content1">
        <div class="judul">
            <h1>Himpunan</h1>
        </div>
        <div class="container">
            <div class="row responsive">
                <div class="col-12">
                <img src="assets/img/logo-bem.png" alt="logo bem">
                    <div class="slider">
                        <div class="teks">
                            <h2>1. HMPS Teknologi Informasi</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium accusamus doloribus dolorum nostrum vitae, aut obcaecati est autem asperiores at quaerat inventore exercitationem ad alias facere. Perferendis corporis commodi in et libero dolorem nemo harum quae, nam molestiae suscipit impedit repudiandae vitae maxime. Ea atque error, odio aut neque quas?</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                <img src="assets/img/logo-bem.png" alt="logo bem">
                    <div class="slider">
                        <div class="teks">
                            <h2>1. HMPS Teknologi Informasi</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium accusamus doloribus dolorum nostrum vitae, aut obcaecati est autem asperiores at quaerat inventore exercitationem ad alias facere. Perferendis corporis commodi in et libero dolorem nemo harum quae, nam molestiae suscipit impedit repudiandae vitae maxime. Ea atque error, odio aut neque quas?</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                <img src="assets/img/logo-bem.png" alt="logo bem">
                    <div class="slider">
                        <div class="teks">
                            <h2>1. HMPS Teknologi Informasi</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium accusamus doloribus dolorum nostrum vitae, aut obcaecati est autem asperiores at quaerat inventore exercitationem ad alias facere. Perferendis corporis commodi in et libero dolorem nemo harum quae, nam molestiae suscipit impedit repudiandae vitae maxime. Ea atque error, odio aut neque quas?</p>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </section>

    <!-- konten 2 -->
    <section class="content2">
        <div class="judul">
            <h1>Komunitas, BSO, dan LSO</h1>
        </div>
        <div class="container">
        <img src="assets/img/logo-bem.png" alt="logo bem">
            <div class="slider">
                <div class="teks">
                    <h2>1. HMPS Teknologi Informasi</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium accusamus doloribus dolorum nostrum vitae, aut obcaecati est autem asperiores at quaerat inventore exercitationem ad alias facere. Perferendis corporis commodi in et libero dolorem nemo harum quae, nam molestiae suscipit impedit repudiandae vitae maxime. Ea atque error, odio aut neque quas?</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bottom">
        <div class="bg-bottom">
            <img src="assets/img/bg-bottom.svg" loading="lazy" alt="bg-bottom" class="img-fluid">
        </div>
    </section>
        
    <?php include('./partials/footer.php') ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $('.responsive').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
})
    </script>
</body>
</html>