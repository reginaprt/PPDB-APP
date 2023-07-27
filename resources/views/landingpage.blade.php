<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PPDB SDN Simpang 2</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ ('assets/img/sd.png') }}" rel="icon">
  <link href="{{ ('assets/img/sd.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ ('assets\vendor\bootstrap\css\bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ ('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ ('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ ('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ ('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ ('assets/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>PPDB<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#home">Beranda</a></li>
          <li><a href="#about">Profil</a></li>
          <li><a href="#daftar">Daftar</a></li>
          <li><a href="#contact">Kontak</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Home Section ======= -->
  <div class="container">
    <section id="home" class="home">
      <div class="container position-relative">
        <div class="row gy-5" data-aos="fade-in">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
            <h2>Penerimaan Peserta Didik Baru <br> <span>SDN Simpang 2</span></h2>
            <p>Bapak dan Ibu orang tua calon peserta didik baru dapat mendaftarkan putra putrinya sebagai peserta didik baru di sekolah kami secara online. Sistem akan merekap secara otomatis data peserta didik baru yang di input melalui form pendaftaran.</p>
            </div>
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="assets/img/sd.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- End home Section -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Profil SDN Simpang 2</h2>
          <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-6">
            <img src="assets/img/sdd.jpg" class="img-fluid rounded-4 mb-4" alt="">
            <p>SDN Simpang 2 merupakan salah satu SD Negeri yang berada di Kecamatan Sindangbarang, menempati luas seluas 3505 m2. Lokasi SDN Simpang 2 ini terletak di jalan Cisitu Desa Muaracikadu Kecamatan Sindangbarang yang berdiri sejak tahun 1970. SDN Simpang 2 ini memiliki akreditasi B berdasarkan sertifikat 02.00/330/BAP-SM/XI/2017.</p>
          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
            <p>Fasilitas yang tersedia di SDN Simpang 2 ini menyediakan listrik untuk membantu kegiatan belajar mengajar. Sumber listrik yang digunakan oleh SD NEGERI SIMPANG 2 berasal dari PLN. SD NEGERI SIMPANG 2 dan Wi-fi  internet yang dapat digunakan untuk mendukung kegiatan belajar mengajar menjadi lebih mudah.</p>

              <div class="position-relative mt-4">
                <img src="assets/img/sdd2.jpg" class="img-fluid rounded-4" alt="">
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Our Daftar Section ======= -->
    <section id="daftar" class="daftar sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Daftar</h2>
          <p>Jika ingin mendaftar silahkan membuat akun terlebih dahulu, dengan mengklik button daftar dibawah ini.</p>
          <br>
            <a href="{{ route('login') }}" class="btn btn-primary">Daftar</a>
        </div>

      </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Kontak</h2>
          <p>Jika ingin informasi lebih lengkap, silahkan hubungi kontak di bawah ini.</p>
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-12">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Lokasi:</h4>
                  <p>Kp. Simpang, Saganten, Sindangbarang, Cianjur</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>sdnsimpang2@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Telepon:</h4>
                  <p>081214555460</p>
                </div>
              </div><!-- End Info Item -->
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>SDN Simpang 2</span></strong>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ ('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ ('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ ('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ ('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ ('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ ('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ ('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ ('assets/js/main.js') }}"></script>

</body>

</html>