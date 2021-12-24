<!DOCTYPE html>
<html lang="en">

<head>
  <title>Culinaries 2021 | Applications.</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
  <style>
    .page-item{
      margin: 0 !important;
    }
  </style>
</head>

<body>
  <nav id="head" class="navbar nav navbar-expand-lg fixed-top" onscroll="Scroll()">
    <div class="nav-box">
    </div>
    <a class="navbar-brand" href="#"><b class="brand-var">:Culinaries</b></a>
    <div class="toggle">
      <div class="bar"></div>
      <div class="bar"></div>
      <div class="bar"></div>
    </div>

    <div class="collapse pl-5 navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto topnav">
        <li class="nav-item">
          <a class="nav-link" href="#beranda">Beranda <span class="sr-only">(current)</span></a>
          <!-- <a class="nav-link actived" href="/#beranda">Beranda <span class="sr-only">(current)</span></a> -->
        </li>

        <li class="nav-item">
          <a class="nav-link" href="./blog">Blog</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#services">Layanan</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#teori">Teori</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#about">Tentang</a>
        </li>
      </ul>
      <div class="form-inline pr-15 my-2 my-lg-0">
        <a href="./../auth/auth.php" class="btn btn-app">Masuk</a>
      </div>
    </div>
  </nav>

  <section class="content">
  <!-- MAIN-TOP -->
  <div class="main-top">
    <!-- BANNER -->
    <div id="beranda" class="main-banner">
      <div class="left-banner">
        <h1 class="mb-15">Bingung Mencari Info Kuliner? Kunjungi Culinaries</h1>
        <p class="text-justify">Culinaries merupakan startup yang Bergerak di bidang Kuliner dengan
          mengutamakan kuliner Indonesia. Dengan adanya aplikasi ini maka orang akan bisa lebih mudah melihat informasi tentang kuliner Daerah yang ada di Indonesia. </p>
        <div class="text-left"><br>
          <a href="#services" class="btn btn-app btn-width-same">Mulai</a>
          <!-- <a href="https://drive.google.com/file/d/12QjT4JTkjqFrBDwqT_bMcr89bwLMOyWL/view?usp=sharing" target="_blank" class="btn btn-app btn-width-same">Prototype</a> -->
        </div>
      </div>
      <div class="right-banner">
        <img src="./svg/banner/food.svg" class="banner-img mb-10" alt="">
      </div>
    </div>
    <!-- END BANNER -->

    <!-- SERVICES -->
    <div id="services" class="main-services">
      <div class="p-5"></div>
      <div class="title text-center p-3">
        <h3 class="title-head">Layanan Kami</h3>
        <p class="subtitle">Layanan yang bisa di rasakan oleh pengguna Culinaeries.</p>
      </div>
      <div class="p-3"></div>
      <div class="services">
        <div class="row pl-15 pr-15">

          <div class="col-md-4">
            <a href="#" class="link-services">
              <div class="card box-shadow" style="width: 100%; height: auto">
                <div class="card-body m-2 text-center">
                  <img src="./svg/icon/holding-heart-2.svg" class="mb-4" alt="">
                  <h5 class="title-head mb-4">Kenyamanan</h5>
                  <p class="text-justify subtitle">
                    Susah cari informasi Kuliner? Jangan khawatir, kunjungi culinaries yang akan memudahkan harimu mencari informasi-informasi tentang kuliner daerah yang ada di Indonesia.
                  </p>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-4">
            <a href="#" data-toggle="modal" data-target="#exampleModalLong" class="link-services">
              <div class="card box-shadow" style="width: 100%; height: auto">
                <div class="card-body m-2 text-center">
                  <img src="./svg/icon/simple-clockify.svg" class="mb-4" alt="">
                  <h5 class="title-head mb-4">Ontime 24 Jam</h5>
                  <p class=" text-justify subtitle">Jangan khawatir dengan support, kami melayani anda 24 jam full demi kenyamanan dan keamanan pelanggan kami. Dengan adanya aplikasi ini semoga bisa bermanfaat bagi masyarakat.</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-4">
            <a href="#" class="link-services">
              <div class="card box-shadow" style="width: 100%; height: auto;">
                <div class="card-body m-2 text-center">
                  <img src="./svg/icon/awesome-heartbeat.svg" class="mb-4" alt="">
                  <h5 class="title-head mb-4">Keamanan</h5>
                  <p class=" text-justify subtitle">Ragu dengan keamanannya? Percayakan pada Culinaries! penulis sudah di saring dengan berlapis, maka dari itu dengan adanya fitur keamanan maka akan membuat aplikasi ini aman.</p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>

    </div>
    <!-- END SERVICES -->

  </div>
  <!-- END MAIN-TOP -->

  <!-- ABOUT -->
  <div id="teori" class="teori">
    <div class="p-5"></div>
    <div class="title text-center p-3">
      <h3 class="title-head">Teori Kuliner</h3>
      <p class="subtitle">Teori tentang Kuliner Daerah dan Information Lainnya.</p>
    </div>
    <div class="p-3"></div>
    <div class="left-teori">
      <img src="./svg/teori/food-2.svg" class="teori-img" alt="">
    </div>
    <div class="right-teori text-right">
      <div class="p-3"></div>
      <h4 class="title-head text-left">Kuliner Indonesia</h4>
      <p style="text-indent: 50px;" class="text-justify subtitle">Indonesia awalnya dikenal sebagai negeri penghasil rempah yang berlimpah. Dari bumbu berdasar rempah inilah, banyak masakan khas asli Indonesia yang tercipta. Bukan itu saja. Interaksi perdagangan dengan negeri luar Indonesia, menciptakan persilangan jenis masakan yang juga memperkaya selera. </p>
      <p style="text-indent: 50px;" class="text-justify subtitle">Hingga kini, dikenal banyak masakan Indonesia yang mendunia. Dari rendang, nasi goreng, hingga sate telah banyak memanjakan para penikmat dan pencari kepuasan selera. Dan inilah sebagian masakan Nusantara dengan kisah perkembangannya di Indonesia.</p><br>
      <a target="_blank" href="https://www.unileverfoodsolutions.co.id/id/inspirasi-chef/ragam-selera-di-restoran-indonesia/sejarah-kuliner-nusantara-memanja-lidah-berabad-lamanya.html" class="btn btn-app btn-contact">Selengkapnya</a>
      </div>
    </div>
  </div>
  <!-- END ABOUT -->

  <!-- MAIN BOTTOM -->
  <div class="main-bottom">
    <!-- TEAM -->
    <div id="team" class="main-team">
      <div class="p-5"></div>
      <div class="title text-center p-3">
        <h3 class="title-head">Tim Kami</h3>
        <p class="subtitle">Tim Culinaries mengenai founder dan sekaligus pemilik perusahaan.</p>
      </div>
      <div class="p-3"></div>
      <div class="team">
        <div class="row pl-15 pr-15">

          <div class="col-md-6 text-center">
            <a href="https://www.instagram.com/hoyirul_/" target="_blank" class="link-team">
              <img src="./img/team/team-2.jpg" class="img-circle" alt="">
            </a>
            <!-- <div class="p-2"></div> -->
            <h6>Mochammad Hairullah</h6>
            <p>Chief Executive Officer</p>
          </div>

          <div class="col-md-6 text-center">
            <a href="https://www.instagram.com/aidadiana_/ target="_blank" class="link-team">
              <img src="./img/team/team-1.jpg" class="img-circle" alt="">
            </a>
            <!-- <div class="p-2"></div> -->
            <h6>Aida Millti Mardiana</h6>
            <p>Chief Technology Officer</p>
          </div>

        </div>
      </div>
    </div>
    <!-- END TEAM -->

    <!-- ABOUT -->
    <div id="about" class="about">
      <div class="p-5"></div>
      <div class="title text-center p-3">
        <h3 class="title-head">Tentang Kami</h3>
        <p class="subtitle">Tentang aplikasi, informasi dan kontak perusahaan Culinaries.</p>
      </div>
      <div class="p-3"></div>
      <div class="left-about">

        <div class="p-3"></div>
        <h4 class="title-head text-left">Tentang Culinaries</h4>
        <p style="text-indent: 50px;" class="text-justify subtitle">Culinaries merupakan startup yang Bergerak di bidang Kuliner dengan mengutamakan kuliner Indonesia. Dengan adanya aplikasi ini maka orang akan bisa lebih mudah melihat informasi tentang kuliner Daerah yang ada di Indonesia.</p>
        <h4 class="title-head text-left">Docs</h4>
        <p style="text-indent: 50px;" class="text-justify subtitle">Tugas Desain Pemrograman Web aplikasi Informasi Kuliner Daerah Indonesia dengan PHP, MySQL dan Bootstrap 4 </p>
        <table class="table">
          <tr>
            <th>Mata Kuliah</th>
            <td>:</td>
            <td>Desain Pemrograman Web</td>
          </tr>
          <tr>
            <th>Dosen Pengampu</th>
            <td>:</td>
            <td>Wilda Imama S., S.Kom., M.Kom.</td>
          </tr>
        </table>
        <div class="text-left"><br>
          <a target="_blank" href="mailto:bukukoding3@gmail.com?subject=CS : Kontak Kami - Diabets" class="btn btn-app btn-contact">Kontak Kami</a>
        </div>
      </div>
      <div class="right-about text-right">
        <img src="./svg/about/about-2.svg" class="about-img" alt="">
      </div>
    </div>
    <!-- END ABOUT -->
    <br>
  
    <div class="p-3"></div>
    <!-- FOOTER -->
    <footer class="text-center">
      <p class="text-dark">© 2021 Culinaries | Culinaries is a trademark of Web Programming</p>
    </footer>
    <!-- END FOOTER -->
  </div>
  <!-- END MAIN BOTTOM -->

  </section>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script><script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> -->
<script src="./js/nav.js"></script>
<script src="./js/navigation.js"></script>

<script>
  $(document).ready(function() {
    $('#basic-table').DataTable();
    //$('select').select2();
  });
</script>
</body>
</html>