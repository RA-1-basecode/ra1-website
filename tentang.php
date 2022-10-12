<?php

require 'functions.php';
$admin = query("SELECT * FROM admin ORDER BY id ASC");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Ra 1 - Tentang</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="assets/favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="assets/favicon/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="assets/favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="assets/favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="assets/favicon/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="assets/favicon/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="assets/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="assets/favicon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="assets/favicon/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="assets/favicon/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="mstile-310x310.png" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />
  </head>

  <body>

    <!-- ======= Header/Navbar ======= -->
    <?php
    include 'templates/navbar.php';
    ?>
    <!-- End Header/Navbar -->

    <main id="main">
      <!-- ======= Intro Single ======= -->
      <section class="intro-single">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-8">
              <div class="title-single-box">
                <h1 class="title-single">Tentang Kami</h1>
                <p> Kami adalah Mahasiswa Universitas Primagraha fakultas Teknik
                  Informatika kelas Ra 1 tahun angkatan 2022.</p>
              </div>
            </div>
            <div class="col-md-12 col-lg-4">
              <nav
                aria-label="breadcrumb"
                class="breadcrumb-box d-flex justify-content-lg-end"
              >
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="<?= BASE_URL?>">Beranda</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Tentang
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>
      <!-- End Intro Single-->

      <!-- ======= About Section ======= -->
      <section class="section-about">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 position-relative">
              <div class="about-img-box">
                <img
                  src="assets/img/Img-1.jpg"
                  alt="ra 1 class"
                  class="img-fluid"
                />
              </div>
              <div class="sinse-box">
                <h3 class="sinse-title">
                  Kelas Ra 1
                  <br />
                  Teknik Informatika<br/>
                  Universitas Primagraha
                </h3>
                <p>Tahun Angkatan 2022</p>
              </div>
            </div>
            <div class="col-md-12 section-t8 position-relative">
              <div class="row">
                <div class="col-md-6 col-lg-5">
                  <img src="assets/img/ket.png" alt="" class="img-fluid" />
                </div>
                <div class="col-lg-2 d-none d-lg-block position-relative">
                  <div class="title-vertical d-flex justify-content-start">
                    <span>Desi Hafiturohmah</span>
                  </div>
                </div>
                <div class="col-md-6 col-lg-5 section-md-t3">
                  <div class="title-box-d">
                    <h3 class="title-d">
                      Ketua Kelas <span class="color-d">Ra 1</span>
                    </h3>
                  </div>
                  <p class="color-text-a">
                   Selamat datang di website kelas Ra 1 Teknik Informatika teman teman.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- =======Team Section ======= -->
                  <section class="section-agents section-t8 intro-single">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="title-wrap d-flex justify-content-between">
                            <div class="title-box title-single-box">
                              <h2 class="title-a">Mahasiswa
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                      <div class="col-md-12">
                        <div class="card rounded-4">
                          <div class="card-body shadow-lg">
                            <div class="row">
                            <?php foreach($admin as $row) : ?>
                              <div class="col-md-3 pt-3">
                              <div class="card-box-d">
                                <div class="card-img-d">
                                  <img src="admin/foto-profile/<?= $row['photo']; ?>" alt="" class="img-d img-fluid">
                                </div>
                                <div class="card-overlay card-overlay-hover">
                                  <div class="card-header-d">
                                    <div class="card-title-d align-self-center">
                                      <h3 class="title-d">
                                        <a href="#" class="link-two"><?= $row['nama_lengkap']; ?></a>
                                      </h3>
                                    </div>
                                  </div>
                                  <div class="card-body-d">
                                    <div class="content-d color-text-a">
                                      <?= $row['blockquote']; ?>
                                    </div>
                                  </div>
                                  <div class="card-footer-d">
                                    <div class="socials-footer d-flex justify-content-center">
                                      <ul class="list-inline">
                                        <li class="list-inline-item">
                                          <a href="<?= $row['link_facebook']; ?>" class="link-one">
                                            <i class="bi bi-facebook fs-3" aria-hidden="true"></i>
                                          </a>
                                        </li>
                                        <li class="list-inline-item">
                                          <a href="<?= $row['link_twitter']; ?>" class="link-one">
                                            <i class="bi bi-twitter fs-3" aria-hidden="true"></i>
                                          </a>
                                        </li>
                                        <li class="list-inline-item">
                                          <a href="<?= $row['link_instagram']; ?>" class="link-one">
                                            <i class="bi bi-instagram fs-3" aria-hidden="true"></i>
                                          </a>
                                        </li>
                                        <li class="list-inline-item">
                                          <a href="<?= $row['link_github']; ?>" class="link-one">
                                            <i class="bi bi-github fs-3" aria-hidden="true"></i>
                                          </a>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                              <?php endforeach; ?>
                  </div>
                </div>
              </div>
            </div>
            </div>
                </div>
              </section>
      <!-- End About Section-->

      <!-- =======Team Section ======= -->
      <section class="section-agents section-t8 intro-single">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-wrap d-flex justify-content-between">
                <div class="title-box title-single-box">
                  <h2 class="title-a">Our Developer
                </div>
              </div>
            </div>
          </div>
          <div class="row">
                      <div class="col-md-3 pt-3">
                      <div class="card-box-d">
                        <div class="card-img-d">
                          <img src="admin/foto-profile/6343c0bc395a1.jpg" alt="" class="img-d img-fluid">
                        </div>
                        <div class="card-overlay card-overlay-hover">
                          <div class="card-header-d">
                            <div class="card-title-d align-self-center">
                              <h3 class="title-d">
                                <a href="#" class="link-two">Ferlan Ferlani</a>
                              </h3>
                            </div>
                          </div>
                          <div class="card-body-d">
                            <p class="content-d color-text-a">
                              Sebagai penanggung jawab matakulliah Algoritma&Pemerograman.
                            </p>
                          </div>
                          <div class="card-footer-d">
                            <div class="socials-footer d-flex justify-content-center">
                              <ul class="list-inline">
                                <li class="list-inline-item">
                                  <a href="https://web.facebook.com/ferlan.ferlani.id" target="_blank" class="link-one">
                                    <i class="bi bi-facebook fs-3" aria-hidden="true"></i>
                                  </a>
                                </li>
                                <li class="list-inline-item">
                                  <a href="https://twitter.com/FerlanFerlani" target="_blank" class="link-one">
                                    <i class="bi bi-twitter fs-3" aria-hidden="true"></i>
                                  </a>
                                </li>
                                <li class="list-inline-item">
                                  <a href="https://www.instagram.com/ferlanferlani/" target="_blank" class="link-one">
                                    <i class="bi bi-instagram fs-3" aria-hidden="true"></i>
                                  </a>
                                </li>
                                <li class="list-inline-item">
                                  <a href="https://github.com/uniquecoded" target="_blank" class="link-one">
                                    <i class="bi bi-github fs-3" aria-hidden="true"></i>
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
          </div>
        </div>
      </section>
      <!-- End About Section-->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
   <?php
   include 'templates/footer.php';
   ?>
    <!-- End  Footer -->

    <div id="preloader"></div>
    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
