<!doctype html>
<html lang="en">
<?php include('./partials/head.php') ?>

<!-- own css -->
<link rel="stylesheet" href="assets/css/tentang.css">

<body>
    <?php include('./partials/navbar.php') ?>

    <div class="bg-top">
        <img src="assets/img/bg-top.svg" alt="bg-top" loading="lazy">
    </div>

<section>
    <div class="container">
        <div class="fil-logo">
            <h1 class="title-logo">Filosofi Logo</h1>
        </div>
        <div class="logo-bem">
            <img src="assets/img/logo-bem.svg" alt="logo BEM Vokasi UB">
        </div>
        <div class="fil-kabinet">
            <h1 class="title-logo">Kabinet Saskara Gama</h1>
        </div>
        <!-- filosofi -->
      <section class="filosofi">
        <div class="container">
          <h1 class="text-center fil-bentuk fw-bold mb-5">-Filosofi Bentuk-</h1>
          <div class="row d-flex text-center align-content-center">
            <div class="tombol">
                <a onclick="ganti1()">
                  <button>
                    <img src="assets/img/ombak2.svg" alt="" /></button
                ></a>
                <a onclick="ganti2()">
                  <button>
                    <img src="assets/img/matahari2.svg" alt="" /></button
                ></a>
                <a onclick="ganti3()">
                  <button>
                    <img src="assets/img/apidanair2.svg" alt="" /></button
                ></a>
                <a onclick="ganti4()">
                  <button>
                    <img src="assets/img/5api2.svg" alt="" /></button
                ></a>
                <a onclick="ganti5()">
                  <button>
                    <img src="assets/img/3api2.svg" alt="" /></button
                ></a>
                <a onclick="ganti6()">
                  <button>
                    <img src="assets/img/huruf-v.svg" alt="" /></button
                ></a>
                <a onclick="ganti7()">
                  <button>
                    <img src="assets/img/lambang-rabraw.svg" alt="" /></button
                ></a>
            </div>
            <div class="d-flex fil-desc-logo mt-3 view mt-sm-3 text-start" id="ganti-gambar" data-aos="fade-right">
                <img src="assets/img/elemen-api.svg" class="img-fluid" alt="" />
                <div class="text my-auto">
                  <h3 style="font-weight: bolder">Elemen Api</h3>
                  <p>New released</p>
                </div>
            </div>
          </div>
        </div>
      </section>
      <!-- akhir filosofi -->

      <section class="filosofi-nama">
        <div class="container">

        </div>
      </section>
    </div>
</section>

<!-- filosofi js -->
<script type="text/javascript">
      function ganti1() {
        document.getElementById("ganti-gambar").innerHTML =
          "<img src='assets/img/ombak 2.svg' class='img-fluid'>, <h3>The Text</h3>, <p class='my-auto'>The text inscribedd with Creanomic symbolizes creanomic event itself, an acronym from Creative Economy and  Inovation centre.</p>";
      }
      function ganti2() {
        document.getElementById("ganti-gambar").innerHTML =
          "<img src='assets/img/ombak 2.svg' class='img-fluid'>,<div> <h3>The Rise</h3>, <p class='my-auto'>The rise of entrepreneurship skills Creanomic purpose, symbolized with an increased graph.</p> </div> ";
      }
      function ganti3() {
        document.getElementById("ganti-gambar").innerHTML =
          "<img src='assets/img/ombak 2.svg' class='img-fluid'>, <h3>The Fox</h3>, <p class='my-auto'>The Fox Animal Emblem (FOX) becomes a point the main of the Creanomic logo this time because of fox it’s a very smart animal among similar species, and able to adapt quickly, in accordance with the current generation who are able to adapt to the technology growing.</p>";
      }
      function ganti4() {
        document.getElementById("ganti-gambar").innerHTML =
          "<img src='assets/img/ombak 2.svg' class='img-fluid'>, <h3>4 Tails</h3>, <p class='my-auto'>The 4 tails  of the FOX is Creanomic event itself that focuses to the Creatifitas of Entrepreneurship and as a center for digital business innovation.</p>";
      }
      function ganti5() {
        document.getElementById("ganti-gambar").innerHTML =
          "<img src='assets/img/ombak 2.svg' class='img-fluid'>, <h3>Color Palettes</h3>, <p class='my-auto'>Monochrome blue and purple colors symbolize the future and fit this year’s Creanomic theme, and align with the Creanomic ideal of being ready in the future.</p>";
      }
    </script>

    <div class="bg-bawah">
        <img src="assets/img/bg-bottom.svg" alt="" width="100%">
    </div>

    <?php include('./partials/footer.php') ?>


</body>

</html>