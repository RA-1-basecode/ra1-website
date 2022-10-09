<?php
require '../functions.php';

$artikel = query("SELECT * FROM artikel ORDER BY id DESC LIMIT 5");
$project = query("SELECT * FROM project ORDER BY id DESC LIMIT 5");
$pj_mk = query("SELECT * FROM admin ORDER BY id ASC LIMIT 9");



?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Projects - Ra 1 Class</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon" />
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
    <link
      href="../assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="../assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet" />
  </head>

  <body>

    <!-- ======= Header/Navbar ======= -->
    <?php
    include '../templates/navbar.php';
    ?>
    <!-- End Header/Navbar -->

    <main id="main">
      <!-- ======= Intro Single ======= -->
      <section class="intro-single">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-8">
              <div class="title-single-box">
                <h1 class="title-single">Project</h1>
                <span class="color-text-a">Semua Project Ra 1</span>
              </div>
            </div>
            <div class="col-md-12 col-lg-4">
              <nav
                aria-label="breadcrumb"
                class="breadcrumb-box d-flex justify-content-lg-end"
              >
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="#">Beranda</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Project
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>
      <!-- End Intro Single-->

      <!-- ======= Property Grid ======= -->
      <section class="property-grid grid">
        <div class="container">
          <div class="row">
            
            <?php foreach ($project as $row) :?>
              <div class="col-md-4">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img
                    src="../admin/img-projects/<?= $row['foto_project']; ?>"
                    alt=""
                    class="img-a" height="300"
                  />
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="ra1_projects?id=<?= $row['id']; ?>"
                          ><?= $row['subject']; ?></a
                        >
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a"><?= $row['waktu']; ?></span>
                      </div>
                      <a href="ra1_projects?id=<?= $row['id']; ?>" class="link-a"
                        >Klik Disini Untuk Melihat Detail
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Pertemuan</h4>
                          <span
                            ><?= $row['pertemuan']; ?>
                          </span>
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
              <?php endforeach; ?>
          </div>
        </div>
      </section>
      <!-- End Property Grid Single-->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php
    include '../templates/footer.php';
    ?>
    <!-- End  Footer -->

    <div id="preloader"></div>
    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>
  </body>
</html>
