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
      <div class="filosofi-logo">
        <h1 class="title-filosofi">Filosofi Logo</h1>
      </div>
      <div class="logo-bem">
        <img src="assets/img/logo-bem.svg" alt="logo BEM Vokasi UB">
      </div>
      <div class="fil-kabinet">
        <h1 class="title-filosofi">Kabinet Saskara Gama</h1>
      </div>
    </div>
    <!-- filosofi bentuk-->
    <section class="filosofi mt-md-5 mb-md-5">
      <div class="container">
        <h1 class="text-center filosofi-bentuk fw-bold mb-3">-Filosofi Bentuk-</h1>
        <div class="row d-flex text-center mb-5">
          <div class="tombol d-flex flex-fill flex-sm-wrap flex-lg-nowrap flex-wrap justify-content-between">
            <a class=" " onclick="ganti1()">
              <button>
                <img src="assets/img/ombak2.svg" alt="" /></button></a>
            <a class=" " onclick="ganti2()">
              <button>
                <img src="assets/img/matahari2.svg" alt="" /></button></a>
            <a class=" " onclick="ganti3()">
              <button>
                <img src="assets/img/apidanair2.svg" alt="" /></button></a>
            <a class=" " onclick="ganti4()">
              <button>
                <img src="assets/img/5api2.svg" alt="" /></button></a>
            <a class=" " onclick="ganti5()">
              <button>
                <img src="assets/img/3api2.svg" alt="" /></button></a>
            <a class=" " onclick="ganti6()">
              <button>
                <img src="assets/img/huruf-v.svg" alt="" /></button></a>
            <a class=" " onclick="ganti7()">
              <button>
                <img src="assets/img/lambang-rabraw.svg" alt="" /></button></a>
          </div>
        </div>
        <div class="row d-flex fil-desc-logo mt-3 view mt-sm-3 text-start" id="ganti-gambar" data-aos="fade-right">
          <div class="col-md-3 col-12 d-flex justify-content-md-end">
            <img src="assets/img/3api2.svg" class="img-fluid fil-img" alt="" />
          </div>
          <div class="col-md-8 col-12">
            <div class="text my-auto">
              <h3 class="title-fil-bentuk">Elemen Api</h3>
              <p class="desc-fil-bentuk">
                Keberanian dan semangat yang berkobar dalam mengimplementasikan Tridharma perguruan tinggi yang disimbolkan dalam kobar api berjumlah 3. Nyala api yang semakin terang keatas mencerminkan semangat BEM Vokasi UB yang selalu bergelora.
              </p>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- akhir filosofi bentuk-->

    <!-- filosofi warna -->
    <section class="filosofi-warna mt-5 mb-md-5">
      <div class="container">
        <h1 class="text-center filosofi-bentuk fw-bold mb-5">-Filosofi Warna-</h1>
        <div class="row filosofi-warna d-flex justify-content-center">
          <div class="d-flex col-md-6">
            <div class="lingkaran-warna" style="background-color: #2F3161;"></div>
            <p class="desc-warna ms-2">Kuat & bisa diandalkan</p>
          </div>
          <div class="d-flex col-md-6">
            <div class="lingkaran-warna" style="background-color: #EBC803;"></div>
            <p class="desc-warna ms-2">Kejayaan & capaian besar</p>
          </div>
        </div>
        <div class="row filosofi-warna d-flex justify-content-center">
          <div class="d-flex col-md-6">
            <div class="lingkaran-warna" style="background-color: #66C2ED;"></div>
            <p class="desc-warna ms-2">Energi baru yang menyegarkan</p>
          </div>
          <div class="d-flex col-md-6">
            <div class="lingkaran-warna" style="background-color: #fff; border:1px solid #EBC803;"></div>
            <p class="desc-warna ms-2">Kemurnian niat dalam<br>mengemban amanah</p>
          </div>
        </div>
      </div>
    </section>
    <!-- filosofi warna -->

    <section class="filosofi-nama">
      <div class="container">
        <div class="text-center">
          <h1 class="title mb-3">Filosofi Nama</h1>
          <h1 class="title-kabinet">Kabinet Saskara Gama</h1>
        </div>
        <div class="row nama-kabinet d-flex align-content-center mt-3">
          <div class="col-6">
            <div class="nama text-center text-white">
              <h2>SAS-KARA /</h2>
              <h3>sas.ka.ra/</h3>
            </div>
            <div class="desc-nama text-center">
              <p class="deskripsi">Memiliki arti sinar atau cahaya yang menerangi.</p>
            </div>
          </div>
          <div class="col-6">
            <div class="nama text-center text-white">
              <h2>GAMA /</h2>
              <h3>ga.ma/</h3>
            </div>
            <div class="desc-nama text-center">
              <p class="deskripsi">Memiliki arti kebenaran dan kemurnian.</p>
            </div>
          </div>
        </div>
        <!-- <div class="row nama-kabinet d-flex text-center align-content-center">
            
            
          </div> -->
        <div class="row full-desc text-center align-content-center mt-4 p-5">
          <h1>‘SASKARA GAMA’</h1>
          <p class="deskripsi">Harapan besar agar selalu disinari oleh kemurnian cahaya dalam setiap proses langkah aktualisasi kualitas akademisi Fakultas Vokasi Universitas Brawijaya.</p>
        </div>
      </div>
    </section>

    <section class="tagline">
      <div class="container">
        <div class="text-center">
          <h1 class="title mb-3">Tagline</h1>
          <h1 class="text-white text-tagline display-4 mt-5"><i>Bergema, Bergerak, Seirama!</i></h1>
        </div>
      </div>
    </section>
    <section class="visimisi">
      <div class="container">
        <div class="text-center">
          <h1 class="title mb-3">Visi - Misi</h1>
        </div>
        <div class="row box-visimisi d-flex">
          <div class="foto-visimisi col-md-5 col-sm-12 col-12 text-center">
            <img src="assets/img/visimisi.svg" class="img-fluid" alt="Presiden dan Wakil Presiden BEM Vokasi UB">
          </div>
          <div class="col-md-6 col-sm-12 col-12 justify-content-center ms-md-5">
            <h1 class="title-visimisi">Visi</h1>
            <p class="text-visi">Terwujudnya BEM Fakultas Vokasi UB yang <span class="part-visi">independent, professional, progresif</span> dan <span class="part-visi">kolaboratif.</span></p>
            <h1 class="title-visimisi">Misi</h1>
            <div class="list-misi">
              <div class="list1">
                &#x2022;  Disiplin untuk menciptakan lingkungan kerja yang proaktif, serta menjunjung tinggi independensi lembaga.
              </div>
              <div class="list2">
                &#x2022;  Aktivasi nilai inklusifitas serta meningkatkan kapabilitas seluruh fungsionaris BEM Fakultas Vokasi UB.
              </div>
              <div class="list3">
                &#x2022;  Menciptakan program kerja yang kreatif, inovatif, esensial, aplikatif.
              </div>
              <div class="list4">
                &#x2022;  Kerja sama yang kolaboratif dalam rangka efisiensi sumberdaya serta sinergitas antar elemen yang ada di lingkungan Fakultas Vokasi Universitas Brawijaya.
              </div>
            </div>
          </div>
        </div>
        <div class="text-center mt-4">
          <h3><strong>Yuk kepoin kita!</strong></h3>
          <a href="kepengurusan.php" class="btn btn-blue mt-3">Struktur Organisasi</a>
        </div>
      </div>
    </section>
  </section>

  <!-- filosofi js -->
  <script type="text/javascript">
    function ganti1() {
      document.getElementById("ganti-gambar").innerHTML =
        "<div class='col-md-3 col-12 d-flex justify-content-md-end'><img src='assets/img/ombak2.svg' class='img-fluid fil-img'></div><div class='col-md-8 col-12'> <div class='text my-auto'> <h3 class='title-fil-bentuk'>Ombak Air</h3> <p class='my-auto desc-fil-bentuk'>Ketidak putus asaan serta sebagai muara harapan seluruh elemen fakultas vokasi universitas brawijaya.</p> </div></div>";
    }

    function ganti2() {
      document.getElementById("ganti-gambar").innerHTML =
        "<div class='col-md-3 col-12 d-flex justify-content-md-end'><img src='assets/img/matahari2.svg' class='img-fluid fil-img'></div><div class='col-md-8 col-12'> <div class='text my-auto'> <h3 class='title-fil-bentuk'>Matahari Terbit</h3> <p class='my-auto desc-fil-bentuk'>Sesuai Berubahnya Vokasi yang menjadi fakultas, Matahari terbit disimbolkan sebagai semangat dan optimisme yang baru serta menjadi awal untuk kita dapat menggapai tujuan bersama.</p> </div></div>";
    }

    function ganti3() {
      document.getElementById("ganti-gambar").innerHTML =
        "<div class='col-md-3 col-12 d-flex justify-content-md-end'><img src='assets/img/apidanair2.svg' class='img-fluid fil-img'></div><div class='col-md-8 col-12'> <div class='text my-auto'> <h3 class='title-fil-bentuk'>Air dan Api</h3> <p class='my-auto desc-fil-bentuk'>keseimbangan antara seluruh elemen Fakultas vokasi ub.</p> </div></div>";
    }

    function ganti4() {
      document.getElementById("ganti-gambar").innerHTML =
        "<div class='col-md-3 col-12 d-flex justify-content-md-end'><img src='assets/img/5api2.svg' class='img-fluid fil-img'></div><div class='col-md-8 col-12'> <div class='text my-auto'> <h3 class='title-fil-bentuk'>5 Lidah Api Matahari</h3> <p class='my-auto desc-fil-bentuk'>Sebagai simbol 5 program studi yang selalu bersinar dan memberikan cahaya kebermanfaatan.</p> </div></div>";
    }

    function ganti5() {
      document.getElementById("ganti-gambar").innerHTML =
        "<div class='col-md-3 col-12 d-flex justify-content-md-end'><img src='assets/img/3api2.svg' class='img-fluid fil-img'></div><div class='col-md-8 col-12'> <div class='text my-auto'> <h3 class='title-fil-bentuk'>3 Kobar Api</h3> <p class='my-auto desc-fil-bentuk'>Melambangkan semangat dalam mengimplementasikan tridharma perguruan tinggi (Pendidikan, Penelitian dan Pengabdian kepada masyarakat).</p> </div></div>";
    }

    function ganti6() {
      document.getElementById("ganti-gambar").innerHTML =
        "<div class='col-md-3 col-12 d-flex justify-content-md-end'><img src='assets/img/huruf-v.svg' class='img-fluid fil-img'></div><div class='col-md-8 col-12'> <div class='text my-auto'> <h3 class='title-fil-bentuk'>Huruf V</h3> <p class='my-auto desc-fil-bentuk'>Melambangkan Fakultas Vokasi Universitas Brawijaya.</p> </div></div>";
    }

    function ganti7() {
      document.getElementById("ganti-gambar").innerHTML =
        "<div class='col-md-3 col-12 d-flex justify-content-md-end'><img src='assets/img/lambang-rabraw.svg' class='img-fluid fil-img'></div><div class='col-md-8 col-12'> <div class='text my-auto'> <h3 class='title-fil-bentuk'>Lambang Raja Brawijaya</h3> <p class='my-auto desc-fil-bentuk'>Membawa semangat raja brawijaya sebagai representasi mahasiswa ub serta asal usul bem vokasi ub.</p> </div></div>";
    }
  </script>

  <div class="bg-bawah">
    <img src="assets/img/bg-bottom.svg" alt="" width="100%">
  </div>

  <?php include('./partials/footer.php') ?>

</body>

</html>