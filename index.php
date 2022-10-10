<?php
require 'functions.php';

session_start();
if(isset($_SESSION['admin'])) {
  header("Location: login");
  exit;
}

$artikel = query("SELECT * FROM artikel ORDER BY id DESC LIMIT 5");
$project = query("SELECT * FROM project ORDER BY id DESC LIMIT 5");
$admin = query("SELECT * FROM admin ORDER BY id ASC LIMIT 9");




?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Ra 1 - Teknik Informatika</title>
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

    <!-- ======= Intro Section ======= -->
    <div class="intro intro-carousel swiper position-relative">
      <div class="swiper-wrapper">
        <div
          class="swiper-slide carousel-item-a intro-item bg-image"
          style="background-image: url(assets/img/Img-5.jpg)"
        >
          <div class="overlay overlay-a"></div>
          <div class="intro-content display-table">
            <div class="table-cell">
              <div class="container">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="intro-body">
                      <p class="intro-title-top">
                        Serang-Banten <br />
                        2022
                      </p>
                      <h1 class="intro-title mb-4">
                        <span class="color-b">Ra 1 </span> Teknik <br />
                        Informatika
                      </h1>
                      <p class="slogan">
                        Tidak kenal lelah untuk teknik informatika. Bersama
                        informatika bisa!
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div
          class="swiper-slide carousel-item-a intro-item bg-image"
          style="background-image: url(assets/img/Img-2.jpg)"
        >
          <div class="overlay overlay-a"></div>
          <div class="intro-content display-table">
            <div class="table-cell">
              <div class="container">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="intro-body">
                      <p class="intro-title-top">
                        Serang-Banten <br />
                        2022
                      </p>
                      <h1 class="intro-title mb-4">
                        <span class="color-b">RA 1 </span> Teknik <br />
                        Informatika
                      </h1>
                      <p class="slogan">
                        Jiwa kami Teknik Informatika benar-benar dipenuhi api
                        semangat untuk membanggakan korsa kami.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div
          class="swiper-slide carousel-item-a intro-item bg-image"
          style="background-image: url(assets/img/Img-1.jpg)"
        >
          <div class="overlay overlay-a"></div>
          <div class="intro-content display-table">
            <div class="table-cell">
              <div class="container">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="intro-body">
                      <p class="intro-title-top">
                        Serang-Banten <br />
                        2022
                      </p>
                      <h1 class="intro-title mb-4">
                        <span class="color-b">RA 1 </span> Teknik <br />
                        Informatika
                      </h1>
                      <p class="slogan">
                        Semangat saling berbagi ilmu dan bersama menjadi ahli
                        Teknik Informatika kebanggaan Indonesia.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
    <!-- End Intro Section -->

    <main id="main">
      <!-- ======= Latest Projects Section ======= -->
      <section class="section-property intro-single section-t8">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-wrap d-flex justify-content-between">
                <div class="title-box title-single-box">
                  <h2 class="title-a">Project Terbaru</h2>
                  <small>Poject terbaru kelas Ra 1 Teknik Informatika</small>
                </div>
                <div class="title-link">
                <a href="<?= BASE_URL?>projects/">Lihat Semua >
                </a>
              </div>
              </div>
            </div>
          </div>

          <div id="property-carousel" class="swiper">
            <div class="swiper-wrapper">
              <?php foreach ($project as $row) : ?>
              <div class="carousel-item-b swiper-slide">
                <div class="card-box-a card-shadow">
                  <div class="img-box-a">
                    <img
                      src="admin/img-projects/<?= $row['foto_project']; ?>"
                      alt=""
                      class="img-a" height="300"
                    />
                  </div>
                  <div class="card-overlay">
                    <div class="card-overlay-a-content">
                      <div class="card-header-a">
                        <h2 class="card-title-a">
                          <a href="projects/ra1_projects?id=<?= $row['id']; ?>"
                          ><?= $row['subject']; ?>
                          </a>
                        </h2>
                        <p class="text-white">Author : <?= $row['author']; ?></p>
                      </div>
                      <div class="card-body-a">
                        <div class="price-box d-flex">
                          <span class="price-a"><?= $row['waktu']; ?></span>
                        </div>
                        <a href="projects/ra1_projects?id=<?= $row['id']; ?>" class="link-a"
                          >Klik disini untuk melihat detail
                          <span class="bi bi-chevron-right"></span>
                        </a>
                      </div>
                      <div class="card-footer-a">
                        <ul class="card-info d-flex justify-content-around">
                          <li>
                            <h4 class="card-info-title">Pertemuan</h4>
                            <span>0<?= $row['pertemuan']; ?></span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Teknologi</h4>
                            <span><?= $row['teknologi']; ?></span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Semester</h4>
                            <span><?= $row['semester']; ?></span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End carousel item -->
              <?php endforeach; ?>
            </div>
          </div>
          <div class="propery-carousel-pagination carousel-pagination"></div>
        </div>
      </section>
      <!-- End Latest Properties Section -->

      <!-- ======= Agents Section ======= -->
      <section class="section-agents intro-single section-t8">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-wrap d-flex justify-content-between">
                <div class="title-box title-single-box">
                  <h2 class="title-a">PJ Matakuliah</h2>
                  <small>Penanggung jawab matkuliah kelas Ra 1 Teknik Informatika</small>
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
                            <p class="content-d color-text-a">
                              Sebagai penanggung jawab matakulliah <?= $row['pj_mk']; ?>.
                            </p>
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
      <!-- End Agents Section -->

      <!-- ======= Latest News Section ======= -->
      <section class="section-news intro-single section-t8">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-wrap d-flex justify-content-between">
                <div class="title-box title-single-box">
                  <h2 class="title-a">Kabar Terbaru</h2>
                  <small>Kabar terbaru dari kelas Ra 1 Teknik Informatika</small>
                </div>
                <div class="title-link">
                <a href="<?= BASE_URL?>blog/">Lihat Semua >
                </a>
              </div>
              </div>
            </div>
          </div>

          <div id="news-carousel" class="swiper">
            <div class="swiper-wrapper">

              <!-- looping carausel artikel -->
              <?php foreach($artikel as $row) : ?>
                <div class="carousel-item-c swiper-slide">
                <div class="card-box-b card-shadow news-box">
                  <div class="img-box-b">
                    <img
                      src="admin/img-posts/<?= $row['gambar']; ?>"
                      alt=""
                      class="img-b" height="300"
                    />
                  </div>
                  <div class="card-overlay">
                    <div class="card-header-b">
                      <div class="card-category-b">
                        <a href="blog/ra1-posts?id=<?= $row['id']; ?>" class="category-b"><?= $row['kategori']; ?></a>
                      </div>
                      <div class="card-title-b">
                        <h2 class="title-2">
                          <a href="blog/ra1_posts?id=<?= $row['id'];?>"
                            ><?= $row["judul"]; ?></a
                          >
                        </h2>
                      </div>
                      <div class="card-date">
                        <span class="date-b"><?= $row['waktu']; ?></span>
                      </div>
                      <div class="author">
                        <small>Author : <?= $row['author']; ?></small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php endforeach;?>
              <!-- End carousel item -->
            </div>
          </div>

          <div class="news-carousel-pagination carousel-pagination"></div>
        </div>
      </section>
      <!-- End Latest News Section -->
    </main>
    <!-- End #main -->


    <!-- footer -->
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
