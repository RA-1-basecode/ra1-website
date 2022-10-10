<?php
require '../functions.php';

$id = $_GET['id'];
$artikel = query("SELECT * FROM artikel WHERE id = $id")[0];
$data = query("SELECT * FROM admin WHERE id = $id")[0];

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $artikel['judul']; ?> - Ra 1 Class</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="../assets/favicon/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/favicon/apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/favicon/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/favicon/apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon-precomposed" sizes="60x60" href="../assets/favicon/apple-touch-icon-60x60.png" />
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="../assets/favicon/apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="../assets/favicon/apple-touch-icon-76x76.png" />
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="../assets/favicon/apple-touch-icon-152x152.png" />
  <link rel="icon" type="image/png" href="../assets/favicon/favicon-196x196.png" sizes="196x196" />
  <link rel="icon" type="image/png" href="../assets/favicon/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/png" href="../assets/favicon/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="../assets/favicon/favicon-16x16.png" sizes="16x16" />
  <link rel="icon" type="image/png" href="../assets/favicon/favicon-128.png" sizes="128x128" />
  <meta name="application-name" content="&nbsp;"/>
  <meta name="msapplication-TileColor" content="#FFFFFF" />
  <meta name="msapplication-TileImage" content="mstile-144x144.png" />
  <meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
  <meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
  <meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
  <meta name="msapplication-square310x310logo" content="mstile-310x310.png" />

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
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
              <h1 class="title-single"><?= $artikel['judul']; ?></h1>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="<?= BASE_URL?>."><small>Beranda</small></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  <small>Blog</small>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  <small><?= strtolower($artikel['judul']); ?></small>
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Blog Single ======= -->
    <section class="news-single nav-arrow-b">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="news-img-box text-center">
              <img src="../admin/img-posts/<?= $artikel['gambar']; ?>" alt="post-image" class="img-fluid">
            </div>
          </div>
          <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
            <div class="post-information">
              <ul class="list-inline text-center color-a">
                <li class="list-inline-item mr-2">
                  <strong>Author : </strong>
                  <span class="color-text-a"><?= $artikel['author']; ?></span>
                </li>
                <li class="list-inline-item mr-2">
                  <strong>Kategori : </strong>
                  <span class="color-text-a"><?= $artikel['kategori']; ?></span>
                </li>
                <li class="list-inline-item">
                  <strong>Tanggal : </strong>
                  <span class="color-text-a"><?= $artikel['waktu']; ?></span>
                </li>
              </ul>
              <hr>
            </div>
            <div class="post-content color-text-a">
              <p>
               <?= $artikel['konten']; ?>
              </p>
              <blockquote class="blockquote">
                <p class="mb-4"><?= $artikel['blockquote']; ?></p>
                <footer class="blockquote-footer">
                  <strong><?= $artikel['author']; ?></strong>
                  <cite title="Source Title">Author</cite>
                </footer>
              </blockquote>
            </div>
            <div class="post-footer">
              <div class="post-share">
                <span>Share: </span>
                <ul class="list-inline socials">
                  <li class="list-inline-item">
                    <a href="#">
                      <i class="bi bi-facebook" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <i class="bi bi-twitter" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <i class="bi bi-instagram" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <i class="bi bi-linkedin" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <h5 style="font-style: italic; text-align : center;">Fitru komentar masih dalam tahap pengembangan...</h5>
        </div>
      </div>
    </section><!-- End Blog Single-->

  </main>
  <!-- End #main -->

  <!-- footer -->
  <?php
  include '../templates/footer.php';
  ?>
  <!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>